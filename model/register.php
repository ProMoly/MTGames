<?php

include_once __DIR__ . '/../model/conectBD.php';

//Funció signIn
function signIn($nom, $correu, $pssw, $adress, $poblacio, $cp)
{
    $bd = conectBD();
    $sql = 'INSERT INTO `client` (Nom,Mail,Password,Adreça,Poblacio,CodiPostal) VALUES (?,?,?,?,?,?)';
    $conexio = $bd->prepare($sql);
    $aux = password_hash($pssw, PASSWORD_DEFAULT);
    $dades = array($nom, $correu, $aux, $adress, $poblacio, $cp);
    $conexio->execute($dades);
}

//Funció per validar la contrasenya--->
function validar_clave($clave,&$error_clave){
    if(strlen($clave) < 6){
        $error_clave = "La contrasenya ha de tenir almenys 6 caràcters";
        return false;
    }
    if(strlen($clave) > 16){
        $error_clave = "La contrasenya no pot tenir més de 16 caràcters";
        return false;
    }
    if (!preg_match('`[a-z]`',$clave)){
        $error_clave = "La contrasenya ha de tenir almenys una lletra minúscula";
        return false;
    }
    if (!preg_match('`[A-Z]`',$clave)){
        $error_clave = "La contrasenya ha de tenir almenys una lletra majúscula";
        return false;
    }
    if (!preg_match('`[0-9]`',$clave)){
        $error_clave = "La contrasenya ha de tenir almenys un número";
        return false;
    }
    $error_clave = "";
    return true;
}