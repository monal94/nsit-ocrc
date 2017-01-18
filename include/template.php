<?php
if (!defined('WEB_ROOT')) {
	exit;
}
$self = WEB_ROOT . 'index.php';
$uType = $_SESSION['user_type'];
if($uType == 'admin' || $uType == 'employee' ){
//	$img = WEB_ROOT . 'images/company_info.jpg';
$img = WEB_ROOT . 'images/Nsit.jpg';
}else {
	$img = WEB_ROOT . 'images/Nsit.jpg';
}
?>
<html>
<head>
<title><?php echo $pageTitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="include/admin.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo WEB_ROOT;?>include/admin.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/menu.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/main.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/common.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/complains.js"></script>
</head>
<body>
    <div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
          <h1><a href="login.php"><img src="images/NSit Logo.png" alt="image" width="70" height="70"/>NSIT OCRC <small> Your Complaint is in safe hands. </small></a></h1>
      </div>
        <div class="menu_nav100">
       <ul100>

          <li100 class="active"><a href="login.php">Logout</a></li100>
          <li100><a href="Meet the team.html">Meet The Team</a></li100>
          <li100><a href="aboutNSIT.html">About Nsit</a></li100>


      </ul100>
        <div class="clr"></div>
      </div>
      
       <div class="header_img"><a href="login.php"><img src="images/3_1.jpg" alt="image" height="350" width="1400" /></a>
  
      </div>
      
    </div>
  </div>
        <p>&nbsp;</p>
<table width="1200" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
  <tr>
   <!-- <td colspan="2"><img src="<?php echo $img; ?>" width="1200" height="120"></td>-->
  </tr>
  <tr>
    <td width="20%" valign="top" class="navArea"><p>&nbsp;</p>
 	<?php include("menu.php"); ?>    
	</td>
    <td width="720" valign="top" class="contentArea"><table width="100%" border="0" cellspacing="0" cellpadding="20">
        <tr>
          <td>
<?php
require_once $content;	 
?>
          </td>
        </tr>
      </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p><a200>&copy Copyright</a200> <a100> Mohd Naveed(296/COE/12) * Hitesh Saini(276/COE/12)</a100></p>
    </div>
</body>
</html>
