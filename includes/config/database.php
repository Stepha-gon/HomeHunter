<?php

function conectarDB(){
    $db= mysqli_connect('localhost','root', 'general1','homehunter_crud');

    if(!$db){
        echo "No se pudo conectar a la base de datos";
        exit;
    }

    return $db;
}


















?>