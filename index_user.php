<?php include "connectDB/connectdb.php"; ?> 
<?php include "check_session.php";?> 
<!DOCTYPE html> 
<html> 
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
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



  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.html" class="js-logo-clone">Comshop</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon icon-person"></span></a></li>
                  <li>
                    <a href="cart.php" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                    
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
          <li>
              <a href="index_shop.php">Home</a>
            </li>
           
            <li><a href="index_shop.php">Shop</a></li>
            <li><a href="order.php">Order</a></li>
            <li><a href="add_salary.php">Bank</a></li>
            <li><a href="index_user.php">Profile</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="index3.php">Logout</a></li>
            
          </ul>
        </div>
      </nav>
    </header>

            
           

    

  
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>
        <?php 
            $sql = mysqli_query($conn, "Select * from user where id = ".$ses_userid." ");
                while($row = mysqli_fetch_array($sql)) { 
                    $id         =   $row['id']; 
                    $f_name     =   $row['f_name']; 
                    $l_name     =   $row['l_name']; 
                    $sex   =   $row['sex']; 
                    $birthday   =   $row['birthday']; 
                    $age        =   $row['age']; 
                    $email      =   $row['email']; 

                     
                    echo" <div class='show'>
                        <div class='t-center'> สวัสดี     ". $f_name." ". $l_name."</div><br/>
                        <table width='100%'> 
                            <tr>
                                <td class='t-right'>ID:</td>
                                <td>".$id. "</td> 
                            </tr>
                            <tr>
                                <td class='t-right'>ชื่อ:</td>
                                <td>".$f_name. "</td> 
                            </tr>
                            <tr>
                                <td class='t-right'>นามสกุล:</td>
                                <td>".$l_name." </td> 
                            </tr>
                            <tr>
                                <td class='t-right'>เพศ:</td>
                                <td>".$sex. "</td> 
                            </tr>
                            <tr>
                                <td class='t-right'>วันเกิด:</td>
                                <td>".$birthday. " </td> 
                            </tr>
                            <tr>
                                <td class='t-right'>อายุ:</td>
                                <td>".$age. "</td> 
                            </tr>
                            <tr>
                                <td class='t-right'>email:</td>
                                <td>".$email."</td> </tr>

                            <tr>
                                <td class='t-right'>วันที่ล๊อคอิน:</td>
                                <td>".$ses_date." </td> 
                            </tr>
                            <tr>
                                <td class='t-right'>เวลาที่ล๊อคอิน: </td>
                                <td>".$ses_time." </td> 
                            </tr> 
                        </table> 
                        <br/>
                        <center>
                        <a href='logout.php'><input type='submit' value='ออกจากระบบ'' /></a>
                        <a href='edit_user.php'><input type='submit' value='แก้ไขข้อมูลสมาชิก' /></a>
                        
                </a></center> 
                    </div>";
                }
            ?>
</body> 
</html>
