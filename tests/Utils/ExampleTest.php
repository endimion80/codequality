<?php 
namespace App\Tests\Util;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testSuccessExample()
    {
        // Obtendríamos el resultado haciendo cualquier operacion
        $dato1 = 20;
        $dato2 = 22;
        $result = $dato1 + $dato2;

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, $result);
    }


    public function testFailExample()
    {
        $result = 45;
        $this->assertEquals(42, $result,"hola mundo");
    }
}
?>
