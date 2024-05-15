<?php
/**ESTO ES M5 */
namespace app\Models;

use Illuminate\Support\Facades\Date;

class Tasca{
    private String $titol;
    private String $descripcion;
    private Date $dataLimit;
    private String $estat;

    public function __construct(String $titol,String $descripcion,Date $dataLimit,String $estat = "Pendent"){
        $this->titol = $titol;
        $this->descripcion = $descripcion;
        $this->dataLimit = $dataLimit;
        $this->estat = "Pendent";
    }

    public function __toString()
    {
        return "Tasca : " .$this->titol.
        " Descripcion: " .$this->descripcion.
        " Data Limit: " .$this->dataLimit.
        " Estat: " -$this->estat;
    }

    public function getTitol() : String{
        return $this->titol;
    }

    public function getDescripcion() : String{
        return $this->descripcion;
    }

    public function getDataLimit() : Date{
        return $this->dataLimit;
    }

    public function getEstat() : String{
        return $this->estat;
    }

    public function setEstat() : String{
        return $this->estat;
    }
}
?>
