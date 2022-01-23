<?php
/**
 * @return array
 **/


function getinfo($idc){
    $conn = conectBD();

    $sql = 'SELECT * FROM client WHERE ClientID = ? LIMIT 1';

    $stmt = $conn->prepare($sql);

    $stmt->execute(array($idc));

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

