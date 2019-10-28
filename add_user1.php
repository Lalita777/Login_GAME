<?php date_default_timezone_set('Asia/Bangkok'); ?> 
<?php include "connectDB/connectdb.php"; 
session_start(); 
if(isset($_POST)){
    $f_name     =   $_POST['f_name']; 
    $l_name     =   $_POST['l_name']; 
    $username   =   $_POST['username'];
    $sex        =   $_POST['sex']; 
    $birthday   =   $_POST['birthday'];
    $age        =   $_POST['age']; 
    $email      =   $_POST['email']; 
    $password   =   $_POST['password'];
    $password_2  =  $_POST['password_2'];
    
    $sql = "INSERT INTO user(f_name,l_name,username,sex,birthday,age,email,password) VALUES 
    ('".$f_name."','".$l_name."','" .$username. "','" .$sex. "','".$birthday."','".$age."','".$email."','".$password."')";
    $query = mysqli_query($conn,$sql); 
    $check_add = "select * from user where email ='$email' and password ='$password'";
    $query1= mysqli_query($conn, $check_add); 
    if($query1){
        while ($data = mysqli_fetch_array($query1)) { 
            echo "
            <!DOCTYPE html> 
            <head>
                <title>กรุณารอสักครู่</title>
                <link rel='stylesheet' type='text/css' href='css/style.css'> 
            </head>
            <body> 
                <div class='boxLogin'> 
                    <div>
                        กรุณารอสักครู่<br /> 
                    </div> 
                </div> 
            </body> 
            </html>";
            
            $_SESSION["ses_id"]        =   session_id();//สร้าง Session สําหรับเก็บค่า ID ของ session 
            $_SESSION["ses_userid"]    =   $data["id"];// ส่วไป Sassion สําหรับเก็บค่า ID ของ User 
            $_SESSION["ses_date"]      =   date("d/M/Y");//สร้าง session สําหรับเก็บค่าวันที่ล้อคอน 
            $_SESSION["ses_time"]      =   date("H:i:s");//สร้าง session สําหรับเก็บค่าเวลาตอนล้อคอิน 
            echo "<meta http-equiv='refresh' content='1;URL=index_user.php'>"; 
            //ส่งค่าจากหน้านี้ไปหน้า index user.php
        }
        }else{ 
        $msg="ไม่สามารถป้อนข้อมูลได้[".''.$query.''."]"; 
        echo $msg;
        echo "<a href='add_user.php'>กลับ</a>";
        }
}
?>
