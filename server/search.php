<?php 
require  $_SERVER['DOCUMENT_ROOT'] .'/PHPCRUD/server/config.php';

$data = json_decode(file_get_contents("php://input"),true);

$pserach = $data["search"] ;

if($pserach){
$sql = "SELECT * FROM registration WHERE fullname LIKE '%". $pserach."%'" ; 

$result = mysqli_query($conn , $sql)or die ("Search query failed");

$count = mysqli_num_rows($result) ;


if($count > 0){
    $row = mysqli_fetch_all($result , MYSQLI_ASSOC);
    echo json_encode($row) ;
}
else{
    echo json_encode(array("message"=>"no search found", "status" => "false"));
}
}
else{
    echo json_encode(array("message"=>"Bad Request"));
}

?>