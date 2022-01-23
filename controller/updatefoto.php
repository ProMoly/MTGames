<?php

include_once __DIR__ . '/../model/conectBD.php';
require_once __DIR__ . '/../model/updatephoto.php';


if(isset($_FILES['profile_image']) && !empty($_FILES['profile_image'])){
    if (($_FILES["profile_image"]["type"] === "image/gif")
        || ($_FILES["profile_image"]["type"] === "image/jpeg")
        || ($_FILES["profile_image"]["type"] === "image/jpg")
        || ($_FILES["profile_image"]["type"] === "image/png")){
        // Ruta donde se guardarán las imágenes que subamos
        $filesAbsolutePath = $_SERVER['DOCUMENT_ROOT'].'/Practica/fitxers/';
        // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
        move_uploaded_file($_FILES['profile_image']['tmp_name'],$filesAbsolutePath.$_FILES['profile_image']['name']);
        guardaBD($_FILES['profile_image']['name']);
    }else{
        echo "No pots pujar una imatge en aquest format!";
    }
}
header("location: index.php?accio=perfil");
