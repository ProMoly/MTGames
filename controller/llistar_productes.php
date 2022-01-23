<?php

require_once __DIR__ . '/../model/conectBD.php';
require_once __DIR__ . '/../model/productes.php';

if(isset($_GET['query'])){
    $productes=getProductesByQuery($_GET['query']);
}else{
    $productes = getproductes($_GET['catid']);
}

include __DIR__ . '/../view/llistar_productes.php';

