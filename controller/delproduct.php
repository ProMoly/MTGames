<?php

require __DIR__ . '/../model/cabas.php';

if (isset($_GET['idbin'])) {
    $idbin = $_GET['idbin'];
    if($_SESSION['cabas'][$idbin]['q'] === 1){
        unset($_SESSION['cabas'][$idbin]);
    }else{
        $_SESSION['cabas'][$idbin]['q'] =  $_SESSION['cabas'][$idbin]['q'] - 1;
    }

}