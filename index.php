<?php
// index.php

session_start();

$filesAbsolutePath = 'C:/xampp/htdocs/Practica/fitxers/';
$filesPublicPath = '/fitxers/';
$accio = $_GET['accio'] ?? null;

switch ($accio) {
    case 'register':
        include __DIR__ . '/Resource/resource_register.php';
        break;
    case 'llistar-productes':
        include __DIR__ . '/Resource/resource_llistar_productes.php';
        break;
    case 'mostrar-info':
        include __DIR__ . '/Resource/resource_mostrar_info.php';
        break;
    case 'login':
        include __DIR__ . '/Resource/resource_login.php';
        break;
    case 'logout':
        include __DIR__ . '/controller/logout.php';
        break;
    case 'cabas':
        include __DIR__ . '/controller/cabas.php';
        break;
    case 'buidar':
        include __DIR__ . '/controller/buidarcabas.php';
        break;
    case 'llist':
        include __DIR__ . '/Resource/cabaspage.php';
        break;
    case 'perfil':
        include __DIR__ . '/Resource/perfil.php';
        break;
    case 'busca':
        include __DIR__ . '/controller/buscador.php';
        break;
    case 'updatefoto':
        include __DIR__ . '/controller/updatefoto.php';
        break;
    case 'getcabas':
        include __DIR__ .'/controller/getCabas.php';
        break;
    case 'cerca':
        include __DIR__ .'/Resource/resource_llistat_cerca.php';
        break;
    case 'delete_item_cabas':
        include __DIR__ .'/controller/deleteproduct.php';
        break;
    case 'add_item_cabas':
        include __DIR__ .'/controller/addproduct.php';
        break;
    case 'del_item_cabas':
        include __DIR__ .'/controller/delproduct.php';
        break;
    case 'desar_comanda':
        include __DIR__  . '/Resource/confirmaciocomanda.php';
        break;
    case 'modificar':
        include __DIR__ .'/controller/modificar.php';
        break;
    case 'historial':
        include __DIR__ . '/Resource/resource_historial.php';
        break;
    default:
        include __DIR__ . '/Resource/resource_portada.php';
        break;
}