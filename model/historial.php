<?php
/**
 * @return array
 **/
include_once __DIR__ . '/conectBD.php';

function getComandes($idUser)
{
    $conn = conectBD();

    $sql = 'SELECT data_creacio, num_elements , import_total, ComandaID FROM comanda WHERE ClientID = ?';

    $stmt = $conn->prepare($sql);

    $stmt->execute(array($idUser));

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function desgloseComanda($ComandaID){
    $conn = conectBD();

    $sql = 'SELECT nom_producte, quantitat, preu_unitari, preu_total, ProducteID FROM linia_comanda WHERE ComandaID = ?';

    $stmt = $conn->prepare($sql);

    $stmt->execute(array($ComandaID));

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
