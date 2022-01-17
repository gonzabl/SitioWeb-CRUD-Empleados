<?php 

// controlador que se encarga de mostrar las vistas
class ControladorPaginas{

    public function inicio(){
        include_once('vistas/paginas/inicio.php');
    }

    public function error(){
        include_once('vistas/paginas/error.php');
    }
}
?>