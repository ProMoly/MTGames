<?php

require_once __DIR__ . '/../model/conectBD.php';
require_once __DIR__ . '/../model/modifica.php';

$userid=$_SESSION['user_id'];

if(count($_REQUEST)>1){ //Si ha rebut paràmetres
//Guardem totes les dades
    $nom = $_REQUEST['nom'];
    $correu = $_REQUEST['email'];
    $adress=$_REQUEST['adreca'];
    $cp=$_REQUEST['cp'];
    $poblacio=$_REQUEST['poblacio'];

    actualitza($nom, $correu, $adress, $poblacio, $cp, $userid);//actualitza BD

}

header('location: index.php?accio=perfil');

