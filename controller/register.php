<?php

require_once __DIR__ . '/../model/conectBD.php';
require_once __DIR__ . '/../model/register.php';

$message ="";
$error=[];
$err = ""; //Error password

if(count($_REQUEST)>1){ //Si ha rebut paràmetres
//Guardem totes les dades
    $nom = $_REQUEST['nom'];
    $correu = $_REQUEST['email'];
    $pssw = $_REQUEST['clau'];
    $adress=$_REQUEST['adreca'];
    $cp=$_REQUEST['cp'];
    $poblacio=$_REQUEST['poblacio'];

//Comprovem totes les dades
    if(!validar_clave($pssw, $err)){ //Validem Contrasenya
        array_push($error, "Password");
    }

    if(!filter_var($correu, FILTER_VALIDATE_EMAIL)){ //Validem Email
        array_push($error, "Email");
    }

    if(!preg_match("/^([a-zA-Z' ]+)$/",$nom)){
        array_push($error, "Nom");
    }

    if(!preg_match('/^[0-9]{5,5}$/', $cp)){
        array_push($error, "CP");
    }

   if(empty($error)){//Si no hi ha error guardem "success"
        $message="success";

       signIn($nom, $correu, $pssw, $adress, $poblacio, $cp);//Sign In

    }else{//Guardem error
        $message ="Formulari amb errors";
    }
}else{
    //Inicialitzem els valors perque el primer cop no imprimeixi res als values del form
    $err = $nom = $correu = $pssw = $adress = $cp = $poblacio = "";
}
include __DIR__.'/../view/registre.php';



