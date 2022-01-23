<?php

if(isset($_SESSION['user_id'])){
    include __DIR__ . '/../model/conectBD.php';
    include __DIR__ . '/../model/perfil.php';

    $perfil = getinfo($_SESSION['user_id']);
    $user = $perfil[0];

    include __DIR__ . '/../view/updateprofile.php';
}