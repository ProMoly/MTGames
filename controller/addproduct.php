<?php

require __DIR__ . '/../model/cabas.php';

if (isset($_GET['idbin'])) {
    $idbin = $_GET['idbin'];

    $_SESSION['cabas'][$idbin]['q'] =  $_SESSION['cabas'][$idbin]['q'] + 1;

}

