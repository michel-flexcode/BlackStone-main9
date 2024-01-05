<?php

include("../connection.php");

$user = $_POST['user'];
$password = $_POST['pass'];
$idioma = $_POST['idioma'];

$user_scaped = htmlspecialchars($user, ENT_QUOTES, 'UTF-8');
$password_scaped = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');

//vamos a sacar la contraseña de user
$sentencia_user = "SELECT * FROM `users` WHERE name='".$user_scaped."'";   

$consulta = mysqli_query($connection, $sentencia_user) or die("Error de Consulta");

//vamos a recorrer la consulta y guardar los datos 
while($file= mysqli_fetch_array($consulta)){

    $pass=$file['pass'];

    //comprobamos si el user exsite y si existe que tenga esa contraseña
    if(password_verify($password_scaped,$pass)){
        session_start();
        $_SESSION['login']="SI";
        $_SESSION['acceso']= time();
        $_SESSION['idioma'] = $idioma;

        header("Location: ../index.php");
    }else {
        header("Location: ../login.php?err=si");
    }
}

if($user == "" || $password == ""){

    header("Location: ../login.php?err=si");
}

?>      
