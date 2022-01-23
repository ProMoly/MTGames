<?php

include_once __DIR__ . '/../model/conectBD.php';

function guardaBD($imatge)
{
    $bd = conectBD();
    $sql = 'UPDATE `client` SET ImatgePerfil = ? WHERE `client`.`ClientID`= ?';
    $conexio = $bd->prepare($sql);
    $dades = array($imatge,$_SESSION['user_id']);
    $conexio->execute($dades);
}
