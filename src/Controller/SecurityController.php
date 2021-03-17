<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Service\Backend\SecurityService;
use App\Service\UtilsBase\UtilsService;
use Doctrine\ORM\EntityManagerInterface;
use PDO; 

class SecurityController extends AbstractController
{

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login(UtilsService $utilsService,
                        AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $isTestingIP = $utilsService->isTestingMode();
        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 
                                                        'isTestingIP' => $isTestingIP, 
                                                        'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     * @Route("/backend/login", name="backend_login")
     */
    public function loginBackend(   UtilsService $utilsService,
                                    AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute("backend_home");
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $isTestingIP = $utilsService->isTestingMode();

        return $this->render('security/login_backend.html.twig', [  'isTestingIP' => $isTestingIP, 
                                                                    'last_username' => $lastUsername,
                                                                     'error' => $error]);
    }

    // TODO ELIMINAR CUANDO TENGAMOS LA CONEXIÓN
    /**
     * @Route("/apitest", name="backend_apitest")
     */
    public function testAPIBackend( Request $request, 
                                    UtilsService $utilsService)
    {

        $isTestingIP = $utilsService->isTestingMode();

        if (!$isTestingIP)
            return new Response('Loading...');

        $conn_env = $_ENV['DATABASE_URL'];
        $resultConection = '';
        /*
        $user = 'root';
        $password = 'root';
        $hostname = 'mysql';
        $dbname = 'riradata';
        */
        /*
        $user = 'kosaas_admin@mysql-kosaas';
        $password = 'r4OKNL8biO';
        $hostname = '10.15.8.119';
        $dbname = 'rira_test';*/

        $user = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASSWORD'];
        $hostname = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_NAME'];

        $CA_CERT = $_ENV['CA_CERT'];

        $dsn = 'mysql:dbname='.$dbname.';host='.$hostname;
        try {
            $options = array(
                PDO::MYSQL_ATTR_SSL_CA => $CA_CERT,
                PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false
            );

            $dbh = new PDO($dsn, $user, $password, $options);

            $resultConection = 'Exito en la conexión';
        } catch (\PDOException $e) {
            $resultConection = 'Falló la conexión: ' . $e->getMessage();
        }
                
        //$urlAsitur = "https://asicpd1ws01d.asitur.lan/RIRA/api/colaborador/WSCodigoColaborador/12346";
        //$urlAsitur = "https://wsrdesa.asitur.net/RIRA/api/sucursal/WSDatosSucursal/CBBBCOAB";
        $urlAsitur = "http://wsrdesa.asitur.net/RIRA/api/sucursal/WSDatosSucursal/CBBBCOAB";
        

        //$urlAsitur = "https://apiasitur.rira.es/RIRA/api/grua/WSAltaGrua/CBAYETAB";
        //$urlAsitur = "https://apiasitur.rira.es:8443/RIRA/api/grua/WSAltaGrua/CBAYETAB";
        //$urlAsitur = "https://apiasitur.rira.es:8443/RIRA/api/grua/WSAltaGrua/CBAYETAB";

        $responseAsitur = "";
        $urlETC = "https://www.eurotransportcar.com/api/etc/v2/login/";
        $responseETC = "";

        $arrayPost = null;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $urlAsitur);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        

        if (true){
            $username = $this->em->getRepository('App:Parameters')->getParameter('API_ASITUR_USERNAME');
            $password = $this->em->getRepository('App:Parameters')->getParameter('API_ASITUR_PASSWORD');
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_NTLM);
            curl_setopt($ch, CURLOPT_UNRESTRICTED_AUTH, true);
            curl_setopt($ch, CURLOPT_USERPWD, $username.":".$password);
        }
        //curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: multipart/form-data"));
        //curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        
        if (!is_null($arrayPost)){
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS,  serialize($arrayPost));
        }

        $responseAsitur= curl_exec($ch);


        //$http_code = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
        //$totalTime = curl_getinfo( $ch, CURLINFO_TOTAL_TIME );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $urlETC);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        
        //curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: multipart/form-data"));
        
        //curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        /*
        if (!is_null($arrayPost)){
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS,  serialize($arrayPost));
        }*/

        $responseETC= curl_exec($ch);
        curl_close($ch);
        
        //$http_code = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
        //$totalTime = curl_getinfo( $ch, CURLINFO_TOTAL_TIME );


        return $this->render('frontend/test_borrar.html.twig', 
        [   'urlAsitur' => $urlAsitur,
            'responseAsitur' => $responseAsitur,
            'urlETC' => $urlETC,
            'responseETC' => $responseETC,
            
            'conn_env' => $conn_env,
            'user' => $user,
            'password' => $password,
            'hostname' => $hostname,
            'dbname' => $dbname,
            'CA_CERT' => $CA_CERT,
            'resultConection' => $resultConection
            ]);
    }





    /**
     * @Route("/backend_logout", name="backend_logout")
     */
    public function logoutBackend()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     * Manda un mail al solicitante para recuperar su contraseña
     * 
     * @Route("/forgot_password", name="forgot_password")
     * 
     * @param Request $request
     * @return JsonResponse
     */
    public function sendMailForgotPasswordAction(Request $request, SecurityService $securityService)
    {
        $params = $request->request->all();

        $response = $securityService->checkCollaboratorEmail($params);

        if($response['status']){
            $data = $response['data'];
            $response = $securityService->sendMailForgotPassword($data);
        }        

        return new JsonResponse($response);
    }

    /**
     * Renderizado de la plantilla del correo de recuperar contraseña (para testing)
     * 
     * @Route("/test_forgot_password", name="test_forgot_password")
     * 
     * @param Request $request
     * @return JsonResponse
     */
    public function showMailForgotPasswordTemplateAction(Request $request)
    {
        return $this->render('mails/passwordRecovery.html.twig', [
            'web_domain' => '',
            'token' => ''
        ]);
    }

    /**
     * Renderiza la vista para recuperar la contraseña
     * 
     * @Route("/recoveryPassword/{recovery_token}", name="password_recovery")
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @param string $recovery_token
     */
    public function recoverPasswordAction($recovery_token, SecurityService $securityService)
    {
        $response = $securityService->checkCollaboratorRecoveryPasswordToken($recovery_token); 

        if($response['status']) {
            return $this->render('security/recover_password.html.twig', ['recovery_token' => $recovery_token]);
        } else {
            return $this->redirectToRoute('app_login');
        }
    }

}
