<?php 
if(!isset($_SESSION)){
    session_start();
    // เช็คว่า User ได้ผ่านการ Login มาหรือไม่ (ถ้าไม่ได้ Login มาให้ส่งต่อไปหน้าไหนก็ใส่ URL  ตรงตําแหน่ง index.php) 
        if (!isset($_SESSION["ses_userid"])) {
            header("Location: index.php"); 

        exit;
        }
    }
?>

<?php
    $ses_userid =   $_SESSION["ses_userid"];
    $ses_date   =   $_SESSION["ses_date"];
    $ses_time   =   $_SESSION["ses_time"];
    
?>