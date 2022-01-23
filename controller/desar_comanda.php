<?php

include_once __DIR__ .'/../model/conectBD.php';
include_once __DIR__ .'/../model/desar_comanda.php';

if(!empty($_SESSION['cabas'])){

    $precio_comanda = 0;
    $n_elements=0;
    $data = date('r');
    $data = substr($data,0,-6);

    foreach ($_SESSION['cabas'] as $prod):
        $n_elements+=$prod['q'];
        $preu_total = $prod['Preu'] * $prod['q'];
        $precio_comanda += $preu_total;
    endforeach;

    crearComanda($_SESSION['user_id'],  $n_elements, $precio_comanda, $data);

    $comandaID = getIDComanda($_SESSION['user_id'], $data)[0];

    foreach ($_SESSION['cabas'] as $prod):
        $pID=$prod['ProducteID'];
        $nom = $prod['Nom'];
        $q = $prod['q'];
        $preu = $prod['Preu'];
        $preu_total = $preu * $q;
        $precio_comanda += $preu_total;
        crearLiniaComanda($nom, $q, $preu, $preu_total, $comandaID['ComandaID'], $pID);
    endforeach;
    $comandes=desglosaComanda($comandaID['ComandaID']);
    $comanda['data_creacio'] = $data;
    $comanda['import_total'] = $precio_comanda;
    $comanda[0] = $comandes;

    $_SESSION['cabas'] = []; //Netegem cabas
    include_once __DIR__ .'/../view/confcomanda.php';
}else{
    include_once __DIR__ .'/../view/errorcomanda.php';
}

