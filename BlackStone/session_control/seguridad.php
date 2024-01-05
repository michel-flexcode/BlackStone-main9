<?php
   

    session_start();
    if($_SESSION['login'] != "SI"){

        header("Location: login.php"); 
 
    }else{

        $dateguardada = $_SESSION['acceso'];
        $ahora = time();
        $tiempotranscurrido = $ahora-$dateguardada;

    if ($tiempotranscurrido >= 3000) {//tiempo de sesión de 5 minutos
            session_destroy();
            header("Location: login.php");
        }else{
            $_SESSION['acceso'] = $ahora;
        }
    }
?>  
