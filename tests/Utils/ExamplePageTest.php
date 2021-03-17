<?php 

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
//use App\Repository\UserRepository;
//use App\Repository\CollaboratorUserRepository;


class ExamplePageTest extends WebTestCase
{
    /***************************************************************/
    
    /**
     * Esta función genera una conexión completa, con el EntityManager y demás
    */
    private function getFullConnection(){
        $client = static::createClient();
        $container = $client->getContainer();
        $em = $container->get('doctrine.orm.entity_manager');

        return array(   'client' => $client, 
                        'em' => $em,
                        'conn' => $em->getConnection()
                    );
    }

    /**
     * Login como un usuario de Backend en el "cliente" seleccionado
    */
    private function loginAsBackendUser($client, $backendUser){
        $session = self::$container->get('session');
        
        $firewallName = 'backend';
        $firewallContext = 'backend';

        $token = new UsernamePasswordToken($backendUser, null, $firewallName, $backendUser->getRoles());
        $session->set('_security_'.$firewallContext, serialize($token));
        $session->save();

        $cookie = new Cookie($session->getName(), $session->getId());
        $client->getCookieJar()->set($cookie);

        return $client;
    }

    /***************************************************************/

    // Fallo 404
    
    public function testShowPost()
    {
        $client = static::createClient();

        $client->request('GET', '/post/hello-world');

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }
    
    // Ejemplo de carga correcta
    
    public function testLogin()
    {
        $client = static::createClient();
        $client->request('GET', '/login');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    
    // Pagina interna de backend sin hacer login, no debería mostrar datos
    public function testBackendHomeNoLogin()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/backend/home');
        
        // debería de haber 0 botones de logout puesto que redirige al home
        $this->assertEquals(0, $crawler->filter('.logout_link')->count());
        
        // Otro ejemplo, con un valor mayor que
        //$this->assertGreaterThan(0, $crawler->filter('.logout_link')->count());
        
        // Ejemplo de que en login debe haber un botón de submit
        //$crawler = $client->request('GET', '/backend/login');
        //$this->assertEquals(1, $crawler->filter('#btnSubmit')->count());
    }

    // Ejemplo de buscar un texto en una pagina
    public function testFindTextInPage(){
        $client = static::createClient();
        $client->request('GET', '/backend/login');
        $this->assertStringContainsString(
            'Accede a tu cuenta',
            $client->getResponse()->getContent()
        );
    }

     // Ejemplo de buscar un texto en una pagina
     public function testFindTextLoggedInPage(){
        $fullConn = $this->getFullConnection();
        $em = $fullConn['em'];

        $testUser = $em->getRepository('App:User')->findOneByEmail('backend@gmail.com');

        $client = $this->loginAsBackendUser($fullConn['client'] , $testUser);
        
        $crawler = $client->request('GET', '/backend/home');
        $this->assertEquals(1, $crawler->filter('.logout_link')->count());
        //$this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

}

?>