<?php
require  $_SERVER['DOCUMENT_ROOT'] .'/PHPCRUD/server/config.php';
header('Acess-Control-Method : POST');

$data = json_decode(file_get_contents("php://input"),true);

    $id = $data['id'];
    $fullName = $data['full_name'];
    $email = $data['email'];
    $phoneNumber =$data['phone_number'];
    $address = $data['address'];
    $cnic = $data['cnic'];
    $province = $data['province'];
    $gender = $data['gender'];
    $message = $data['message'];

    
    if($fullName || $email || $phoneNumber || $address || $cnic || $gender || $province || $message){
      $sql = "UPDATE registration SET fullname='$fullName', email='$email', phone='$phoneNumber', address='$address', cnic='$cnic' , gender='$gender', province='$province', message='$message' WHERE id=$id" ;
        if(mysqli_query($conn, $sql) === TRUE){   
            echo json_encode(array("message" => "Success! Updated"));
        }
        else{
            echo json_encode(array("message" => "Failed! Not Updated "));
        }
    }

    else{
        echo json_encode(array("message"=>"Bad Request"));
    }
    
?>
