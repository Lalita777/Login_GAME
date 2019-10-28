<?php include "connectDB/connectdb.php"; ?> 
<?php date_default_timezone_set('Asia/Bangkok'); ?> 
<?php
    session_start(); 
    echo '<meta http-equiv="Content-Type" content="text/html; charset-utf-8" />';
    $username = $_POST['username']; 
    $password = $_POST['password']; //ประกาศตัวแปรชื่อ password โดยการรับค่ามาจากกล่อง password ที่หน้า Login
        
        $check_log = "select * from user where username ='$username' and password ='$password'";
        $check_log2 = mysqli_query($conn, $check_log);
        $num = mysqli_num_rows($check_log2);  
        if($num <=0) {
            echo "
                <!DOCTYPE html> 
                <head>
                    <title>ชื่อผู้ใช้งานหรือรหัสผ่านผิด</title>
                    <link rel='stylesheet' type='text/css' href='css/style.css'> 
                </head>
                <body> 
                    <div class='boxLogin'> 
                        <div>
                            ชื่อผุ้ใช้งาน หรือ รหัสผ่านผิด<br/>กรุณาเข้าสู่ระบบใหม่อีกครั้ง<br />
                            <a href='index.php'>กลับ</a> 
                        </div> 
                    </div> 
                </div> 
                </body> a
                </html>";
            } else { 
            while ($data = mysqli_fetch_array($check_log2)) { 
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
                $_SESSION[ "ses_id"]        =   session_id();//สร้าง Session สําหรับเก็บค่า ID ของ session 
                $_SESSION[ "ses_userid"]    =   $data["id"];// ส่วไป Sassion สําหรับเก็บค่า ID ของ User 
                $_SESSION[ "ses_date"]      =   date("d/M/Y");//สร้าง session สําหรับเก็บค่าวันที่ล้อคอน 
                $_SESSION[ "ses_time"]      =   date("H:i:s");//สร้าง session สําหรับเก็บค่าเวลาตอนล้อคอิน 

                echo "<meta http-equiv='refresh' content='1;URL=index2.html'>"; 
                //ส่งค่าจากหน้านี้ไปหน้า index user.php

            }
        }
?>
                