<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Access-Control-Allow-Methods, Authorization, X-Requestd-With');
define('DB_SERVER', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATBASE', 'crud_operation');

$conn = new mysqli(DB_SERVER, USER, PASSWORD, DATBASE);

if ($conn === false) {
    echo "Error: Could Not Connect Mysql" . (mysqli_connect_error());
}
