<?php

include_once __DIR__ . '/conectBD.php';

function login(string $email, string $password){
    $conn = conectBD();
    $sql = 'SELECT ClientID, Mail, Password FROM client WHERE Mail= :email LIMIT 1';

    $stmt = $conn->prepare($sql);

    $stmt->execute(
        [
            'email'=>$email,
        ]
    );

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if($result===false){
        return null;
    }

    return password_verify($password, $result['Password']) ? $result : null;

}