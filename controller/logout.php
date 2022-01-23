<?php
if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
    unset($_SESSION['cabas']);
    header("location: index.php?accio=null");
} else {
    print_r("no pots tancar sessio si no la has ni iniciat!!!!!");
}
exit;