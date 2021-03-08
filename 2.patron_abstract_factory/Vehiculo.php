<?php
include("Moto.php");
include("Carro.php");
class Vehiculo{
    public $ruedas;
public static function crear($tipo,$numruedas){
    switch ($tipo) {
        case 'moto':
            return new Moto($numruedas);
            break;
        case 'carro':
            return new Carro($numruedas);
            break;
        default:
            return new Exception("No hay un tipo con esas características");
            break;
    }
}   
public function getTipo(){
   return  get_class($this);
}

}
?>