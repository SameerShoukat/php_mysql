<?php
require  $_SERVER['DOCUMENT_ROOT'] .'/PHPCRUD/server/config.php';
header('Acess-Control-Method : POST');

$data = json_decode(file_get_contents("php://input"),true);

$id = $data["id"] ;  

        $sql = "DELETE FROM registration WHERE id=$id";
        if(mysqli_query($conn , $sql) or die("Delete query failed")){
            echo json_encode(array("message"=>"Row has been removed", "Status" => true));
        }
        else{
            echo json_encode(array("message"=>"Failed ! Row not removed","Status" => false));
        }
    
?>