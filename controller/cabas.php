<?php

require  __DIR__ . '/../model/conectBD.php';
require  __DIR__ . '/../model/cabas.php';

if(isset($_SESSION['cabas'])){


    $contador = 0;
    $array_codigos = array();
    $trobat = false;
    foreach($_SESSION['cabas'] as $key => $value):
        array_push($array_codigos,$key);
    endforeach;

    foreach($_SESSION['cabas'] as $prod):
        if($prod['ProducteID'] == $_GET['prodid']){
            $_SESSION['cabas'][$contador]['q']++;
            $trobat = true;
        }
        $contador++;
    endforeach;

    if(!$trobat){
        $newpr = añadircabas($_GET['prodid']);
        $newpr[0]['q'] = 1;
        $_SESSION['cabas'][]=$newpr[0];
    }

    include __DIR__ . '/../view/llistar_cabas.php';
}