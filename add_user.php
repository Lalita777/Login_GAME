<?php include "connectDB/connectdb.php"; ?> 
<!DOCTYPE html> 
<html> 
<head> 
    <title>สมัครสมาชิก</title> 
    <link rel="stylesheet" type="text/css" href="css/style2.css"> 
</head> 
<body>
    <form name="form1" class="form" method="post" action="add_user1.php" enctype="multipart/form-data"> 
    <center><h1>สมัครสมาชิก (Register)</h1></center> 
        <hr>
        <table> 
            <tr>
                <td class="t-right">ชื่อผู้ใช้งาน (Username):</td>
                <td><input type='text' name='username' id='username' required /></td> 
            </tr>
            <tr>
                <td class="t-right">ชื่อ (Firstname):</td>
                <td><input type='text' name='f_name' id='f_name' required /></td> 
            </tr>
            <tr>
                <td class='t-right'>นามสกุล (Lastname):</td>
                <td><input type='text' name='l_name' id='l_name' required /></td> 
            </tr>
            <tr>
                <td class='t-right'>เพศ (Gender): </td> 
                <td> 
                    <select id="sex" name="sex" required>
                        <option value="">-กรุณาเลือก(Please Select)-</option> 
                        <option value="หญิง">หญิง (Female)</option>
                        <option value="ชาย">ชาย (Male)</option>
                    </select> 
                </td>
            </tr>
            <tr>
                <td class='t-right'>วันเกิด (Date of birth):</td>
                <td><input type='date' name='birthday' id='birthday' required/></td> 
            </tr>
            <tr>
                <td class='t-right'>อายุ (Age):</td>
                <td><input type='number' name='age' id='age' required /></td> 
            </tr>
            <tr>
                <td class='t-right'>E-mail:</td>
                <td><input type='email' name='email' id='email' required /></td> 
            </tr>
            <tr>
                <td class='t-right'>รหัสผ่าน (Password):</td>
                <td><input type='password' name='password' id='password' required /></td> 

            </tr>
            <tr>
                <td class='t-right'>ยืนยันรหัสผ่าน (Confirm password):</td>
                <td><input type='password' name='password_2' id='password_2' required /></td> 

            </tr>

        </table> 
        <br/>
        <center>
            <input class="submit" names="btnSubmit" type="submit" value="บันทึก"/>
            <input class="reset" name="btnReset" type="reset" value="รีเซ็ต" />
            <a href="index.php">
                <input type="button" class="cencel" value="ยกเลิก" />
            </a>
        </center>
        <br/> 
    </form>
</body> 
</html>

