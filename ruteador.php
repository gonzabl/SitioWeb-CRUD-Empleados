<?php

//canalizamos los datos, comprobando que lleguen
// estos son los valores que llegan por get, el controlador siguiente es el objeto con la instancia de clase
// si se muestran en la pagina pero en otro lugar comprobamos que estos valores llegan
   // echo $controlador; //paginas
   // echo $accion;// inicio o error

    include_once("controladores/controlador_".$controlador.".php");

    //nombre del controlador con la primera letra en mayuscula
    $objControlador="Controlador".ucfirst($controlador);
    // Se crea la instacia del controlador de paginas y llamo a su metodo para mostrar la pagina de inicio
    $controlador = new $objControlador();
    
    //ejecutamos dinamicamente que funcion va a ejecutar la instancia por medio de la variable dependiendo de lo que llegue $controlador->inicio();
    $controlador->$accion();

?>