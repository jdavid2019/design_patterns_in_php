<?php
class Formulario{
    static private $instancia = null;

    public static function getInstancia(){
        if(self::$instancia == null){
            self::$instancia = new Formulario();
        }
        return self::$instancia;
    }

    public function generarCabecera($titulo){
     ?>
       <head>
            <title><?php echo strtoupper($titulo) ?></title>
       </head>
     <?php
    }
    public function generarPie(){
        ?>
         <footer>
           <div class="foot">
                  <p>Pie de página</p>
           </div>
         </footer>
        <?php
    }
    public function saludo(){
        print "Hola";
    }
}

//o . ya no seria asi $formulario = new Formulario(); aqui lo que hacemos es ahorrar memoria
// 1. $formulario = Formulario::getInstancia(); $formulario->saludo();  // imprime hola
//2.  Formulario::getInstancia()->saludo(); // imprime hola


?>