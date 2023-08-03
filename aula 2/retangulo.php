<?php
class Retangulo{
    public $altura;
    public $largura;

    function __construct($altura, $largura){
        $this->altura = $altura;
        $this->largura = $largura;
    }

    
    function set_altura($altura){
        $this->altura = $altura;
    }

    function set_largura($largura){
        $this->largura = $largura;
    }

    function get_altura($altura){
        return $this->altura;
    }

    function get_largura($largura){
        return $this->largura;
    }

    function calcular_area(){
        return ($this->$altura*$this->$largura)
    }
    function calcular_area(){
        return (2*$this->$altura+2*$this->$largura)
    }
    

}
?>