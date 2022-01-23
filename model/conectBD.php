<?php

function conectBD(){
    $servidor = "localhost"; $usuari = "root"; $clau = "toor";
    try{
        $connexio = new PDO("mysql:host=$servidor;dbname=mtgames;charset=UTF8", $usuari, $clau);
        $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return($connexio);
}