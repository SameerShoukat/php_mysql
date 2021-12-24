<?php
require  $_SERVER['DOCUMENT_ROOT'] .'/PHPCRUD/server/config.php';

$data = json_decode(file_get_contents("php://input"),true);

$username = $data["username"];
$password = $data["password"];

if($username || $password){
    
    if(!filter_var($username,FILTER_VALIDATE_EMAIL)){
        echo json_encode(array("message"=>"Email is not valid"));
    }
    else{
        $checkUser ="SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $checkUser );
        $user = mysqli_fetch_assoc($result);
        if($user > 0){
            echo json_encode(array("message"=>"user already exist", "status"=>"Failed"));        
        }
        else{
            $CreateUser = "INSERT INTO users(username,password) VALUES('$username','$password')";
                if(mysqli_query($conn,$CreateUser) === TRUE){
                    echo json_encode(array("message"=>"User has been created", "status"=>"Success"));   
                }
                else{
                    echo  json_encode(array("Error"=>$conn->error));
                }
            }
    }

}
else{
    echo json_encode(array("message"=>"Bad Request"));
}


