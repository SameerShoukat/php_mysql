<?php 

require_once './config.php';
header('Acess-Control-Method : GET');

$sql =  'SELECT * FROM registration';

$result = mysqli_query($conn, $sql ) or die('Select Query Failed');

$count = mysqli_num_rows($result);

if($count >0){
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($row);
}
else{
    echo  json_encode(array("message"=>"No Data Found"));
}

?>