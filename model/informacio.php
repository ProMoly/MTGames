<?php
/**
 * @return array
 **/
include_once __DIR__ . '/conectBD.php';

function mostrarinfo($idprod)
{
    $conn = conectBD();

    $sql = 'SELECT ProducteID, `Nom` , Imatge, Preu, Descripcio, Actiu FROM producte WHERE ProducteID = ?';

    $stmt = $conn->prepare($sql);

    $stmt->execute(array($idprod));

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

