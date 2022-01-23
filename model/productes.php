<?php
/**
 * @return array
 **/
include_once __DIR__ . '\conectBD.php';

function getproductes($idcat){
    $conn = conectBD();

    $sql = 'SELECT ProducteID, `Nom` , Imatge, Preu, Descripcio, Actiu FROM producte WHERE Categoria = ?';

    $stmt = $conn->prepare($sql);

    $stmt->execute(array($idcat));

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function getproductesByQuery($query){
    $conn = conectBD();
    $query = '%'.$query.'%';
    $sql = 'SELECT ProducteID, `Nom` , Imatge, Preu, Descripcio, Actiu FROM producte WHERE Nom like ?';

    $stmt = $conn->prepare($sql);

    $stmt->execute(array($query));

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}



