<?php
namespace App\Models;

use Illuminate\Support\Facades\Date;
use Expectation;

class Cuenta{

    private float $saldo;
    public function __construct()
    {
    $this->saldo = 0.0;
    }
    public function getSaldo():float{
        return $this->saldo;
    }

    public function ingresar(float $cantidad):void{
        if($cantidad > 0.0)
            $this->saldo += $cantidad;
    }
}
?>
