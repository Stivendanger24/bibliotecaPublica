<?php

$peticionAjax=true;
require_once "../core/configGeneral.php"; 

    if(isset($_POST['dni-reg'])){
        require_once "../controladores/administradorControlador.php";
        $instAdmin = new administradorControlador();


            if(isset($_POST['dni-reg']) && isset($_POST['nombre-reg']) && isset($_POST['apellido-reg'])
            && isset($_POST['usuario-reg'])){   
                echo $instAdmin->agregar_administrador_controlador();
            }

    }else{
        session_start();
        session_destroy();
        echo'<script> window.location.href="'.SERVERURL.'login/" </script>';
    }