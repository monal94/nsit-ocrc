<?php
require_once './library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['txtUserName'])) {
	$result = doLogin();
	
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>
<html>
<head>
<title>NSIT OCRC</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="include/admin.css" rel="stylesheet" type="text/css">
<link href="style1.css" rel="stylesheet" type="text/css" />
<link href="<?php echo WEB_ROOT;?>include/style1.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
          <h1><a href="login.php"><img src="images/NSit Logo.png" alt="image" width="70" height="70"/>NSIT OCRC <small> Your Complaint is in safe hands. </small></a></h1>
      </div>
        <div class="menu_nav">
       <ul>


          <li><a href="Meet the team.html">Meet The Team</a></li>
          <li><a href="aboutNSIT.html">About Nsit</a></li>
          <li class="active"><a href="login.php">Home</a></li>
	
      </ul>     
        <div class="clr"></div>
      </div>
      
        <div class="header_img"><embed src="images/Nsit.swf" width="1400" height="350"  quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="Transparent"></embed>
   
  
      </div>
      
    </div>
  </div>
        <p>&nbsp;</p>
    
    <div class="clr"></div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>About NSIT OCRC</h2>
          <div class="clr"></div>
          
          <img src="images/rComplaint.png" width="613" height="200" alt="image" />
          <div class="clr"></div>
            Welcome to NSIT Online Complaint Redressel Cell </a> Removing the paper movements provides complaint management operations a speed which could never have been possible in manual mode at all. The online complaint redressal cell allows students to book and lodge complaints as and when faced.The cell automatically schedules and prompts admin to study the complaint and source the complaint to concerned departments in the Administrative Department. State of the art management information reports on complaint details and pending complaints with reasons and remarks provides management a better insight to various problems faced by the students.
        </div>
      </div>
    </div>
</div>  

<br/>
      <form method="post" name="frmLogin" id="frmLogin">
       
       <table width="350" border="0" align="right" cellpadding="10" cellspacing="0" bgcolor="#336699" class="entryTable">
        <tr id="entryTableHeader"> 
         <td align="center" bgcolor="#4a030f">:: User Login ::</td>
        </tr>
        <tr> 
         <td class="contentArea1">
		 <div class="errorMessage" align="centre"><?php echo $errorMessage; ?></div>

		  <table width="100%" border="0" cellpadding="2" cellspacing="0" bgcolor="#474746" class="text">
           <tr align="right">
            <td colspan="3">&nbsp;</td>
           </tr>
           <tr class="text"> 
            <td width="100" align="right"><h4><strong>User Name</strong></h4></td>
            <td width="10" align="center">:</td>
            <td><input name="txtUserName" type="text" class="box" id="txtUserName"  size="30" maxlength="40"></td>
           </tr>
           <tr>
             <td align="right"><h4><strong>Password</strong></h4></td>
             <td align="center">:</td>
             <td><input name="txtPassword" type="password" class="box" id="txtPassword" size="30" maxlength="40"></td>
           </tr>
           <tr> 
            <td width="100" align="right"><h4><strong>User Type </strong></h4></td>
            <td width="10" align="center">:</td>
            <td><label>
              <select name="utype" class="box">
			  <option >&nbsp;&nbsp;--- Select User --- &nbsp;</option>
			  <option value="admin">&nbsp;&nbsp; Administrator &nbsp;</option>
			  <option value="student">&nbsp;&nbsp; Student &nbsp;</option>
                          <option value="faculty">&nbsp;&nbsp; Faculty &nbsp;</option>
			  <option value="employee">&nbsp;&nbsp; Employee &nbsp;</option>
              </select>
              </label></td>
           </tr>

              <tr>
                  <td colspan="3"><div align="right"><a href="forget-password.php"><h5>Forget Password</h5></a> </div></td>
              </tr>
              <tr>
            <td colspan="2"></td>
            <td><input name="btnLogin" type="submit" id="btnLogin" value=" Login Now " style="font-size:14px;color:#0066FF;padding:5px 8px;"></td>
           </tr>

          </table></td>
        </tr>
       </table>
       <p>&nbsp;</p>
      </form>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <form method="post" name="frmLogin" id="frmLogin">

            <table  width="350" border="0" align="right" cellpadding="10" cellspacing="0" bgcolor="#336699" class="entryTable">
                <tr id="entryTableHeader">
                    <td align="center" bgcolor="#00252e">:: User Registration ::</td>
                </tr>
                <tr>
                    <td class="contentArea1">

                        <table width="100%" border="0" cellpadding="2" cellspacing="0" bgcolor="#474746" class="text">
                            <tr align="right">
                                <td colspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="2">&nbsp;</td>
                                <div align="center"><h4><strong>Student Registration</strong></h4></div><a href="StudentRegister.php"><div align="center"><img src="images/Click_here_button.png" alt="image" width="80" height="25"/></div></a>

                            </tr>
                            <tr>
                                <td colspan=2">&nbsp;</td>
                                <div align="center"><h4><strong>Faculty Registration</strong></h4></div><a href="FacultyRegister.php"><div align="center"><img src="images/Click_here_button.png" alt="image" width="80" height="25"/></div></a>

                            </tr>

                        </table></td>
                </tr>
            </table>
        </form></td>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
   <h1><a href="login.php"><small><img src="images/up_1.png" alt="image" width="25" height="25"/></small></a></h1>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&copy Copyright <a href="Meet the team.html"  >Mohd Naveed (296/CO/12) *  Hitesh Saini (276/CO/12) * Monal Jain (299/CO/12)</a></p>
</div>
    </body>
</html>
