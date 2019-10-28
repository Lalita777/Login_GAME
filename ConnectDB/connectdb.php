<?php
$server ="localhost"; 
$user ="root";
$password ="";
$db_name ="users";
$conn = new mysqli($server, $user, $password, $db_name);
//connect database
if($conn->connect_errno) {
    printf("เชื่อมต่อฐานข้อมูลไม่ได้", $conn->connect_error); 
    exit();
}
mysqli_set_charset($conn, 'utf8');
?>