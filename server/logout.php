<?php

require  $_SERVER['DOCUMENT_ROOT'] .'/PHPCRUD/server/config.php';

if(isset($_GET['logout'])){
    unset($_SESSION['login']);
    unset($_SESSION['username']);
    header("location:".ab_path);
}



?>