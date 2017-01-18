<html>
<head>
<title>NSIT OCRC</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="include/admin.css" rel="stylesheet" type="text/css">
<link href="style3.css" rel="stylesheet" type="text/css" />
<link href="<?php echo WEB_ROOT;?>include/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
          <h1><a href="login.php"><img src="images/NSit Logo.png" alt="image" width="70" height="70"/>NSIT OCRC <small> Your Complaint is in safe hands. </small></a></h1> <!--<small> Netaji Subhas Institute Of Technology</small></a></h1> -->
      </div>
        <div class="menu_nav">
       <ul>
          
          
          <li><a href="Meet the team.html">Meet The Team</a></li>
          <li><a href="aboutNSIT.html">About Nsit</a></li>
          <li class="active"><a href="login.php">Home</a></li>
	
      </ul>     
        <div class="clr"></div>
      </div>
      
       <div class="header_img"><a href="login.php"><img src="images/3_1.jpg" alt="image" height="350" width="1400" /></a>
  
      </div>
      
    </div>
  </div>
        <p>&nbsp;</p>
    
    <div class="clr"></div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          
        </div>
      </div>
    </div>
</div>  

<?php
require_once './library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['txtUserName'])) {
	$result = doChangePassword();
	
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>


<br/>
<br/>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
 <tr> 
  
 </tr>
 <tr> 
  <td valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="20">
    <tr> 
     <td class="contentArea"> <form method="post" name="frmLogin" id="frmLogin">
       <p>&nbsp;</p>
       <table width="350" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
        <tr id="entryTableHeader"> 
         <td>:: Forget Password::</td>
        </tr>
        <tr> 
         <td class="contentArea"> 
		 <div class="errorMessage" align="center"><?php echo $errorMessage; ?></div>

		  <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
           
            <tr align="center"> 
            <td colspan="5"><div align="right"><a href="login.php">Back</a></div></td>
           </tr>
           
           
           <tr class="text"> 
            <td width="100" align="right">User Name</td>
            <td width="10" align="center">:</td>
            <td><input name="txtUserName" type="text" class="box" id="txtUserName"  size="30" maxlength="40"></td>
           </tr>
           <tr>
             <td align="right">E-mail</td>
             <td align="center">:</td>
             <td><input name="txtEmail" type="text" class="box" id="txtPassword" size="30" maxlength="40"></td>
           </tr>
           <tr> 
            <td width="100" align="right">User Type </td>
            <td width="10" align="center">:</td>
            <td><label>
              <select name="utype" class="box">
			  <option >&nbsp;&nbsp;--- Select User --- &nbsp;</option>
			  <option value="student">&nbsp;&nbsp; Student &nbsp;</option>
                          <option value="faculty">&nbsp;&nbsp; Faculty &nbsp;</option>
			  <option value="employee">&nbsp;&nbsp; Employee &nbsp;</option>
              </select>
              </label></td>
           </tr>
           <tr>
             <td colspan="2">&nbsp;</td>
             <td>&nbsp;</td>
           </tr>
           <tr> 
            <td colspan="2">&nbsp;</td>
            <td><input name="btnLogin" type="submit" id="btnLogin" value=" Change Password " style="font-size:12px;color:#0066FF;"></td>
           </tr>
          </table></td>
        </tr>
       </table>
       <p>&nbsp;</p>
      </form></td>
    </tr>
   </table></td>
 </tr>
</table>
<p>&nbsp;</p>
<h3>&copy Copyright <a href="Meet the team.html"  >Mohd Naveed (296/COE/12) ** Hitesh Saini (276/COE/12)</a></h3> 
    </div>
</body>
</html>
