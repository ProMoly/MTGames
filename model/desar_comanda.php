<?php

function crearComanda($user_id, $n_elements, $precio_comanda,$data){
    $bd = conectBD();
    $sql = 'INSERT INTO `comanda` (data_creacio,ClientID,num_elements,import_total) VALUES (?,?,?,?)';
    $conexio = $bd->prepare($sql);
    $dades = array($data,$user_id,$n_elements,$precio_comanda);
    $conexio->execute($dades);
}

function getIDComanda($userid, $data){
    $conn = conectBD();
    $sql = 'SELECT ComandaID FROM comanda WHERE comanda.ClientID = ? AND comanda.data_creacio = ?';
    $stmt = $conn->prepare($sql);
    $dades = array($userid, $data);
    $stmt->execute($dades);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function crearLiniaComanda($nom, $quantitat, $precio_unitari, $preu_total,$comandaID, $prod_id){
    $bd = conectBD();
    $sql = 'INSERT INTO `linia_comanda` (nom_producte,quantitat,preu_unitari,preu_total,ComandaID,ProducteID) VALUES (?,?,?,?,?,?)';
    $conexio = $bd->prepare($sql);
    $dades = array($nom, $quantitat, $precio_unitari, $preu_total,$comandaID, $prod_id);
    $conexio->execute($dades);
}

function desglosaComanda($ComandaID){
    $conn = conectBD();
    $sql = 'SELECT nom_producte, quantitat, preu_unitari, preu_total, ProducteID FROM linia_comanda WHERE ComandaID = ?';
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($ComandaID));
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

