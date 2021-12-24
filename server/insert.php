<?php
 require  $_SERVER['DOCUMENT_ROOT'] .'/PHPCRUD/server/config.php'; 
 header('Acess-Control-Method : POST');
 
 $data = json_decode(file_get_contents("php://input"),true);


$fullName = $data['full_name'];
$email = $data['email'];
$phoneNumber =$data['phone_number'];
$address = $data['address'];
$cnic = $data['cnic'];
$province = $data['province'];
$gender = $data['gender'];
$message = $data['message'];


    if($fullName || $email || $phoneNumber || $address || $cnic || $province || $gender || $message){   
        $query = "INSERT INTO registration (fullname , email, phone, address, cnic, gender, province, message) VALUES ('$fullName', '$email', '$phoneNumber', '$address', '$cnic', '$gender', '$province', '$message')";

        if(mysqli_query($conn,$query) or die("insert  Query failed")){
        
        echo json_encode(array("message"=>"Data Inserted Successfully")) ; 
        }
        else{
        echo json_encode(array("message"=>"Failed ! Data Not Inserted")) ;
        }
    
    }
    else{
        echo json_encode(array("message"=>"Bad Request"));

    }


?>
