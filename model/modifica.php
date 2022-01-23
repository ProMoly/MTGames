<?php

function actualitza($nom, $correu, $adress, $poblacio, $cp, $userid)
{
    $bd = conectBD();
    $sql = 'UPDATE `client` SET Nom = ?, Mail = ?, Adreça = ?, Poblacio = ?, CodiPostal = ? WHERE client.ClientID = ?';
    $conexio = $bd->prepare($sql);
    $dades = array($nom, $correu, $adress, $poblacio, $cp,  $userid);
    $conexio->execute($dades);
}

//UPDATE `client` SET `Nom` = 'Hola' WHERE `client`.`ClientID` = 9;