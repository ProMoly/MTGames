<?php
if(isset($_SESSION['user_id'])){
    include __DIR__ . '/../view/menu_superior.php';
}else{
    include __DIR__ . '/../view/menu_sign_in.php';
}

