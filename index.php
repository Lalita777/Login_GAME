<?php include "connectDB/connectdb.php"; ?> 
<!DOCTYPE html> 
<html> 
<head>
    <title>เข้าสู่ระบบ</title>
  

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/magnific-popup.css">
    <link rel="stylesheet" href="css1/jquery-ui.css">
    <link rel="stylesheet" href="css1/owl.carousel.min.css">
    <link rel="stylesheet" href="css1/owl.theme.default.min.css">
    <link rel="stylesheet" href="css1/aos.css">
    <link rel="stylesheet" href="css1/style.css">
  </head>

  <style>
  .site-navbar .site-navbar-top {
    border-bottom: 1px solid gray;
    padding-top: 20px;
    padding-bottom: 20px;
    margin-bottom: 0px; }
  .icon {
    color:black;
  }
  .site-blocks-cover h1 {
    font-size: 45px;
    font-weight: 900;
    color: white;
    font-family: 'Lobster', cursive; }
    .site-blocks-cover p {
    color: white;
    font-size: 20px;
    line-height: 35px;
    font-family: 'Lobster', cursive; }
.site-navbar .site-logo a {
    text-transform: uppercase;
    color: #25262a;
    letter-spacing: .4em;
    font-size: 30px;
    font-family: 'Lobster', cursive;
    padding-left: 10px;
    padding-right: 10px;
    border: 2px solid #25262a; }
.site-navbar .site-navigation .site-menu > li > a {
    padding: 9px 10px;
    text-transform: uppercase;
    letter-spacing: 10px;
    color: black;
    font-size: 15px;
    text-decoration: none !important;
 }

    </style>
</head>
<body> 
<div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

           

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.html" class="js-logo-clone">GAME</a>
              </div>
            </div>


          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li>
              <a href="index2.html">GAME</a>
            </li>
            <li><a href="index_shop.php">Shop</a></li>
            

            
          </ul>
        </div>
      </nav>
    </header>

   

    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay=""></div>
            
  
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>


        <div class="boxLogin">
            <center>เข้าสู่ระบบ</center><br/> 
            <form class="login1" action="check_login.php" method="post">
                <div> 
                    <table width="100%"> 
                    <tr>
                        <td class="t-right">ชื่อผู้ใช้งาน :</td>
                        <td><input type="text" name="username" style="width: 80%;" required/></td> 
                    </tr> 
                    <tr>
                        <td class="t-right">รหัสผ่าน : </td>
                        <td><input type="password" name="password" style="width: 80%;" required/></td> 
                    </tr> 
                </table> 
            <br/> 
            <center><input type="submit" value="เข้าสู่ระบบ" />
            <a href="add_user.php">
                    <input type="button" value="สมัครสมาชิก" />
                </a>
            </center> <br>
            <center><a href="adminlogin.php">>>ผู้ดูแลระบบ<<</a></center>
            </div> 
        </form> 
    </div> 
</body> 
</html>
