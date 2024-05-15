<?php
/** ESTO ES DE M5*/

namespace app\Models;

use Exception;
use Illuminate\Support\Facades\Date;

class GestorDeTasques{

    //Array
    private array $tasques;

    public function __construct()
    {
        $this->tasques = []; //lo mismo que lo siguiente
        $this->tasques = array();
    }

    public function afegirTasca(String $titol,String $descripcion, Date $dataLimit){
        $tasca = new Tasca($titol,$descripcion,$dataLimit);
        array_push($this->tasques,$tasca);//igual que lo siguiente
        $this->tasques[] = $tasca;
    }

    /**
     * Elimina una tasca del gestor de tasques, si aquesta tasca no existeix
     * @param String $titol es case sensetive
     * @throws Exception si no existe ninguna tasca con el titulo especificado
     * @return void
     */
    public function elimnarTasca(String $titol){

       $isDelete = false;
        foreach($this->tasques as $id => $tasca){
            if(strtolower($tasca->getTitol()) == strtolower($titol)){
                unset($this->tasques[$id]);
                $isDelete = true;
            }
        }
        if(!$isDelete){
            throw new Exception("");

        }
    }

    public function actualizarTascas(String $titol,String $descripcion,String $estat){
        foreach($this->tasques as $id => $tasca){
            if($tasca->getTitol() == $titol){
                $tasca->setEstat($estat);
            }
        }
    }

    public function llistarTasques():array{
        return $this->tasques;
    }
}
?>
