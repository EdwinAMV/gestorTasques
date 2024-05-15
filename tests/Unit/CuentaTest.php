<?php
namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
use App\Models\Cuenta;

class CuentaTest extends TestCase{

    public function test_cuenta(){
        $cuenta = new Cuenta();
        $this->assertNotNull($cuenta);
    }

    public function test_cuenta_a_cero(){
        $cuenta = new Cuenta();
        $this->assertEquals(0,$cuenta->getSaldo());
    }

    public function test_ingresar_dinero(){
        $cuenta = new Cuenta();
        $cuenta->ingresar(100);
        $cuenta->ingresar(3000);
        $this->assertEquals(3100,$cuenta->getSaldo());
    }


    public function test_ingresar_nagatiu(){
        $cuenta = new Cuenta();
        $cuenta->ingresar(-100);
        $this->assertEquals(0,$cuenta->getSaldo());
    }
}

?>
