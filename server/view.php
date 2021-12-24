<?php
require  $_SERVER['DOCUMENT_ROOT'] .'/PHPCRUD/server/config.php';
header('Acess-Control-Method : POST');

$data = json_decode(file_get_contents("php://input"),true);

    $id = $data["id"];

if($id){
        $result = mysqli_query($conn, "SELECT * From registration WHERE id = $id");
        $row = mysqli_fetch_assoc($result);
        if($row > 0){
        echo json_encode(array($row));
        }   
        else{
            echo json_encode(array("message" => "Failed! Not Updated "));
        }
    }

    else{
        echo json_encode(array("message"=>"Bad Request"));
    }
    
?>
