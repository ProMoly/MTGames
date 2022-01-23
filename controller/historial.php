<?php

require  __DIR__ . '/../model/conectBD.php';
require  __DIR__ . '/../model/historial.php';


if(isset($_SESSION['user_id'])){
    $contador = 0;
    $historial = getComandes($_SESSION['user_id']);
    foreach ($historial as $comanda):
        array_push($historial[$contador],desgloseComanda($comanda['ComandaID']));
    //print_r(desgloseComanda($comanda['ComandaID']),true);
        $contador++;
    endforeach;
    include __DIR__ . '/../view/mostrar_historial.php';
}