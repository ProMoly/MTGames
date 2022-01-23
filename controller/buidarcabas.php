<?php
if(isset($_SESSION['user_id'])){
    $_SESSION['cabas'] = [];
    header("location: index.php?accio=NULL");
}

