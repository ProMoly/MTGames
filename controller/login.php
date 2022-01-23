<?php
if(isset($_SESSION['user_id'])){
    print_r("Ja has iniciat sessió!");
}
else{
    require_once __DIR__. '/../model/login.php';
    $error = "";
    $succ = "";
    if($_SERVER['REQUEST_METHOD']==='POST'){

        $filters = filter_input_array(
            INPUT_POST,
            [
                'correu'=>FILTER_DEFAULT,
                'clau'=>FILTER_DEFAULT,
            ]);

        $email=$filters['correu'];
        $password=$filters['clau'];

        $user = login($email,$password);


        if(isset($user)){
            if($user['Mail'] != $email){
                $error = "El nom d'usuari no s'ha trobat";
            }else if(!$user){
                $error = "La contrasenya es incorrecte";
            }else if($user){
                $succ = "succ";
                $_SESSION['user_id'] = $user['ClientID'];
                $_SESSION['cabas'] = array();
                require __DIR__ . '/../view/loginc.php';
            }
        }

    }
    include __DIR__ . '/../view/login.php';

    return;
}