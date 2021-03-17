<?php 

namespace App\Service\Utils;

use App\Entity\Translations;
use App\Service\UtilsBase\UtilsService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

#use Psr\Log\LoggerInterface;

class TranslationService
{
    private $name = "TranslationService";

    public function __construct(EntityManagerInterface $em, 
                                TranslatorInterface $translator, 
                                UtilsService $utilsService)
    {
        $this->em = $em;
        $this->translator = $translator;
        $this->utilsService = $utilsService;
    }

    public function getName()
    {
        return "Retorno: " . $this->name;
    }


    /**
     * Esta función comprueba que todo esté traducido para ese "id", lo busca en google y lo almacena
     * 
	 * @author Javier Lago
	*/
	public function checkTranslation ($source){

		if ( is_null($source) || $source == '' ) {
			return true;
        }

		$sentence = $this->em->getRepository(Translations::class)->findOneBy(array('source' => $source));

		if (is_null($sentence)){
			$sentence = new Translations();
			$sentence->setSource($source);
			$sentence->setEs($source);
			$sentence->setNeedCheck(true);
		}
		$input = $sentence->getEs();

		// ahora comprobamos idioma por idioma
		$es_original = $sentence->getEs();
		$en_original = $sentence->getEn();
		$fr_original = $sentence->getFr();
		$it_original = $sentence->getIt();
		$pt_original = $sentence->getPt();

		//-----------------------------------------------------------------------
		//*             COMPLETAMOS LAS FRASES DE LOS IDIOMAS QUE FALTAN
		if ($sentence->getFirstTranslation()){
			// EN
			$sentence->setEn( $this->checkTranslationGoogle($source, $input, $sentence->getEn(), 'en') );
			// FR
			$sentence->setFr( $this->checkTranslationGoogle($source, $input, $sentence->getFr(), 'fr') );
			// IT
			$sentence->setIt( $this->checkTranslationGoogle($source, $input, $sentence->getIt(), 'it') );
			// PT
			$sentence->setPt( $this->checkTranslationGoogle($source, $input, $sentence->getPt(), 'pt') );
			$sentence->setFirstTranslation(false);
		}
		//-----------------------------------------------------------------------
		//*           CONTROLAMOS LA PRIMERA LETRA MAYUSCULA DE LA FRASE
		
		// EN
		$sentence->setEn( $this->checkFirstUpperCase($input, $sentence->getEn() ) );
		// FR
		$sentence->setFr( $this->checkFirstUpperCase($input, $sentence->getFr() ) );
		// IT
		$sentence->setIt( $this->checkFirstUpperCase($input, $sentence->getIt() ) );
		// PT
		$sentence->setPt( $this->checkFirstUpperCase($input, $sentence->getPt() ) );

		//-----------------------------------------------------------------------
		//*           CONTROLAMOS LA PRIMERA LETRA MINUSCULA DE LA FRASE
		// ES
		$sentence->setEs( $this->checkFirstLowerCase($input, $sentence->getEs() ) );
		// PT
		$sentence->setPt( $this->checkFirstLowerCase($input, $sentence->getPt() ) );
		// IT
		$sentence->setIt( $this->checkFirstLowerCase($input, $sentence->getIt() ) );
		// EN
		$sentence->setEn( $this->checkFirstLowerCase($input, $sentence->getEn() ) );
		// FR
		$sentence->setFr( $this->checkFirstLowerCase($input, $sentence->getFr() ) );


		//-----------------------------------------------------------------------
		//*           CONTROLAMOS SI LA FRASE ESTA EN MAYUSCULAS
		// ES
		$sentence->setEs( $this->checkUpperCase($input, $sentence->getEs() ) );
		// PT
		$sentence->setPt( $this->checkUpperCase($input, $sentence->getPt() ) );
		// IT
		$sentence->setIt( $this->checkUpperCase($input, $sentence->getIt() ) );
		// EN
		$sentence->setEn( $this->checkUpperCase($input, $sentence->getEn() ) );
		// FR
		$sentence->setFr( $this->checkUpperCase($input, $sentence->getFr() ) );

		//-----------------------------------------------------------------------
		//*           CONTROLAMOS SI LA FRASE ESTA EN MINUSCULAS
		// ES
		$sentence->setEs( $this->checkLowerCase($input, $sentence->getEs() ) );
		// PT
		$sentence->setPt( $this->checkLowerCase($input, $sentence->getPt() ) );
		// IT
		$sentence->setIt( $this->checkLowerCase($input, $sentence->getIt() ) );
		// EN
		$sentence->setEn( $this->checkLowerCase($input, $sentence->getEn() ) );
		// FR
		$sentence->setFr( $this->checkLowerCase($input, $sentence->getFr() ) );

		// si hay algún cambio de formato o traducción marcamos como pendiente de revisar
		if (($sentence->getEs() != $es_original) OR
            ($sentence->getEn() != $en_original) OR
			($sentence->getFr() != $fr_original) OR
            ($sentence->getIt() != $it_original) OR
			($sentence->getPt() != $pt_original)) {

			$sentence->setNeedCheck(true);
		}

		$this->em->persist($sentence);
		$this->em->flush();

		return true;
	}

    function checkTranslationGoogle($source, $input, $output, $language) {
        if (!is_null($input) && $input != '' &&
			(	is_null($output) OR 
				$output == '' OR 
				$output == $source OR 
				$output == 'missing_'.$source ) ){

            $apiKey = $this->utilsService->getParameter("TRANSLATIONS_API_KEY");
            $url = 'https://www.googleapis.com/language/translate/v2?key=' . $apiKey;
            $url .= '&q=' . rawurlencode($input) . '&source=es&target=' . $language;

            $handle = curl_init($url);
            curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);     //We want the result to be saved into variable, not printed out
            $response = curl_exec($handle);                         
            curl_close($handle);
            
            $responseDecoded = json_decode($response, true);
            
            if (isset($responseDecoded['data']['translations'][0]['translatedText'])){
                $output = $responseDecoded['data']['translations'][0]['translatedText'];
            }
        }
        $output  = preg_replace("/&#39;/", "'", $output);
        return $output;
    }

    function checkFirstUpperCase($source, $output){
        $mayus = false;
        $array_accent = array("Á","É","Í","Ó","Ú","À","È","Ì","Ò","Ù","Â","Ê","Î","Ô","Û","Ç","Ü");
        $char = mb_substr($source, 0, 1, 'UTF-8');
        
        if( (preg_match('/[A-Z]$/',$char)==true ) OR in_array($char, $array_accent)) {
            $mayus = true;
        }

        $outPutFirstCharacter = mb_substr($output, 0, 1, 'UTF-8');
        if (isset($outPutFirstCharacter )){
			if(!is_null($output) && preg_match('/[A-Z]$/',$outPutFirstCharacter ) != true && $mayus){
				$output = mb_strtoupper ($outPutFirstCharacter, 'UTF-8') . 
							mb_substr($output, 1, null, 'UTF-8');
			}
		}
        return $output;
    }

    function checkFirstLowerCase($source, $output){
        $lower = false;
        $array_accent = array("á","é","í","ó","ú","à","è","ì","ò","ù","â","ê","î","ô","û","ç","ü");
        $char = mb_substr($source, 0, 1, 'UTF-8');
        
        if( (preg_match('/[a-z]$/',$char)==true ) OR in_array($char, $array_accent)) {
            $lower = true;
        }

        $outPutFirstCharacter = mb_substr($output, 0, 1, 'UTF-8');
        if (isset($outPutFirstCharacter )){
            if(!is_null($output) && preg_match('/[a-z]$/',$outPutFirstCharacter ) != true && $lower){
                $output = mb_strtolower ($outPutFirstCharacter, 'UTF-8') . 
                            mb_substr($output, 1, null, 'UTF-8');
            }
        }
        return $output;
    }

    function checkUpperCase($source, $output){
        $source_aux = mb_strtoupper($source,'UTF-8');
		if ($source_aux == $source){
			$output = mb_strtoupper($output,'UTF-8');
		}

        return $output;      
    }

    function checkLowerCase($source, $output){
        $source_aux = mb_strtolower($source,'UTF-8');
		if ($source_aux == $source){
			$output = mb_strtolower($output,'UTF-8');
		}
        return $output;      
    }

}

?>