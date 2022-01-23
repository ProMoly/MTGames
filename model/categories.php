<?php
/**
 * @return array
 **/
include_once __DIR__ . '\conectBD.php';

function getcategories()
{
    $conn = conectBD();
    $sql = 'SELECT CategoriaID, NomCategoria , Descripcio, Imatge FROM categoria';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
