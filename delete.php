<?php

if (isset($_COOKIE['userinfo'])) {
    $id = $_GET['id'];
    $records = json_decode($_COOKIE['userinfo'],true);
    unset($records[$id]);
    setcookie('userinfo',json_encode($records), time() + 86400 * 10);

    header('Location:list.php');
}


?>
