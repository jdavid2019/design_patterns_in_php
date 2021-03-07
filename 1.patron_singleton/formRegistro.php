<?php
include_once("formulario.php");
class formRegistro{
    public function formularioRegistro(){
        ?>
            <html>
                <?php 
                    Formulario::getInstancia()->generarCabecera("Formulario de registro");
                ?>
                <body>
                    <h1>SOY EL FORMULARIO DE REGISTRO</h1>
                    <table border="2">
                        <thead>
                            <tr>
                                <th>Hoy</th>
                                <th>Mañana</th>
                                <th>Miércoles</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Soleado</td>
                            <td>Mayormente soleado</td>
                            <td>Parcialmente nublado</td>
                        </tr>    
                        <tr>
                            <td>Soleado</td>
                            <td>Mayormente soleado</td>
                            <td>Parcialmente nublado</td>
                        </tr>  
                        <tr>
                            <td>Soleado</td>
                            <td>Mayormente soleado</td>
                            <td>Parcialmente nublado</td>
                        </tr>  
                        </tbody>
                    </table>
                </body>
            </html>
        <?php
    }
}

?>