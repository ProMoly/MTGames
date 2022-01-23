<?php

require  __DIR__ . '/../model/cabas.php';

if(isset($_GET['idbin'])){
    $idbin = $_GET['idbin'];
    unset($_SESSION['cabas'][$idbin]);
}

