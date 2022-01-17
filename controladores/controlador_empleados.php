<?php 

class ControladorEmpleados{

    public function inicio(){
        include_once('vistas/empleados/inicio.php');
    }

    public function crear(){

        if ($_POST) {
            //garantizamos que la informacion llega
            
            print_r($_POST);
        }
        include_once('vistas/empleados/crear.php');

    }

    public function editar(){
        include_once('vistas/empleados/editar.php');

    }


}
?>