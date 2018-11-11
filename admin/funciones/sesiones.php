<?php

function usuario_autenticado(){
    if(!revisar_usuario())
    {
        header('Location:login.php');   //si no esta logeado regresa a inicio
        exit();
    }
    
}

function revisar_usuario()
{
    return isset($_SESSION['usuario']); //si existe regresa true
}

session_start(); //siempre se debe poner donde se toquen sesiones
usuario_autenticado();
?>