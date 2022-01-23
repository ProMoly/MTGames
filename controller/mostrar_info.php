<?php

require_once __DIR__ . '/../model/conectBD.php';
require_once __DIR__ . '/../model/informacio.php';

$producte = mostrarinfo($_GET['prodid']);

include __DIR__ . '/../view/mostrar_info.php';
