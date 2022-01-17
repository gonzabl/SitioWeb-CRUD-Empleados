<?php

//Index se va a encargar de canalizar todos los datos que se le envien

//valores por default para evitar errores:
$controlador="paginas";
$accion="inicio";

if (isset($_GET['controlador']) && isset($_GET['accion']) ) {
    //puedo ver que la informacion llega escribiendo los valores de las variables en la barra de busqueda
    // ej: http://localhost/appwebmvc/?controlador=paginas&&accion=inicio
    // los valores son paginas e inicio respectivamente

    if( ($_GET['controlador']!="") && ($_GET['accion']!="")){

        $controlador= $_GET['controlador'];
    
        $accion= $_GET['accion'];
    }
    //se comprueba que los valores estan llegando y fueron canalizados
    // print_r($controlador);
    // print_r($accion);

}

require_once("vistas/template.php");

?>