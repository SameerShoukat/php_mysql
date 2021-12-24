<?php

require  $_SERVER['DOCUMENT_ROOT'] .'/PHPCRUD/server/config.php';

$data = json_decode(file_get_contents("php://input"),true) ;

$username = $data["username"];
$password = $data["password"];

if($username || $password){
    if(!filter_var($username,FILTER_VALIDATE_EMAIL)){
        echo json_encode(array("message"=>"Email is not valid"));
    }
    else{
        $chechUser = "SELECT * FROM  users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn,$chechUser);
        $user = mysqli_fetch_assoc($result);
        if($user){
            echo json_encode(array("status"=>"success","data"=> $user));
        }
        else{
            echo json_encode(array("status" => "failed", "data"=>"Not Found"));
        }
    }

}
else{
    echo json_encode(array("message"=>"Bad Request"));

}



?>