<?php include "connectDB/connectdb.php";?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
$query_showproduct = mysqli_query($conn,"Seclect * from tbl_product");
$query_showproduct = "SELECT * FROM tbl_product";
$showproduct = mysqli_query($conn,$query_showproduct) or die(mysqli_error());
$row_showproduct = mysqli_fetch_assoc($showproduct);
$totalRows_showproduct = mysqli_num_rows($showproduct);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ComShop@Shop.com</title>
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
 a{
   font-size:25px;

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


          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li><a href="home.php">Home</a></li>
            <li><a href="order1.php">Order</a></li>
            <li><a href="user.php">Customer</a></li>
            <li><a href="index_salary.php">Pay for</a></li>
            <li><a href="index_admin.php">Stock</a></li>
            <li><a href="logout.php">Logout</a></li>
            
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
    

<br><center><a href="add_product.php" class="btn btn-primary" name="btnadd"> 
                เพิ่มสินค้า
            </a></center>
<br>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><center>ลำดับ</center></td>
    <td><center>ชื่อสินค้า</center></td>
    <td width="650px"><center>รายละเอียดสินค้า</center></td>
    <td><center>ราคาสินค้า<center></td>
    <td width="160px"><center>รูปภาพสินค้า</center></td>
    <td><center>วันที่ / เวลานำสินค้าเข้าสู่ระบบ</center></td>
  </tr>
  <?php do { ?>
    <tr>
      <td>&nbsp;&nbsp;<?php echo $row_showproduct['p_id']; ?></td>
      <td>&nbsp;&nbsp;<?php echo $row_showproduct['p_name']; ?></td>
      <td>&nbsp;&nbsp;<?php echo $row_showproduct['p_detail']; ?></td>
      <td>&nbsp;&nbsp;<?php echo $row_showproduct['p_price']." "."บาท"; ?></td>
      <td>&nbsp;&nbsp;<img src="img/<?php echo $row_showproduct['p_img']; ?>" width="100" /></td>
      <td>&nbsp;&nbsp;<?php echo $row_showproduct['date_save']; ?></td>
    </tr>
    <?php } while ($row_showproduct = mysqli_fetch_assoc($showproduct)); ?>
</table>
</body>
</html>
<?php
mysqli_free_result($showproduct);
?>
