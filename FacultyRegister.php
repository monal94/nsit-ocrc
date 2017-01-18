<?php
require_once './library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';


if (isset($_POST['txtUserName'])) {
//	echo $_POST['txtUserName'];
	
	$result = doRegister();
	
	if ($result != '') {
		$errorMessage = $result;
	}
	
}
?>
<html>
<head>
<title>NSIT OCRC</title>
<meta http-equiv="content1-Type" content1="text/html; charset=iso-8859-1">
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
      
        <div class="header_img"><a href="login.php"><img src="images/Faculty.jpg" alt="image" height="350" width="1400" /></a>

      </div>
      
    </div>
  </div>
<p>&nbsp;</p>
<tr>

     <td class="contentArea1">
	 <form method="post" name="frmUserReg" id="frmUserReg" action="">
       <p>&nbsp;</p>
       <table width="600" border="3" align="center" cellpadding="10" cellspacing="1" bgcolor="#336699" class="entryTable">
        <tr id="entryTableHeader"> 
         <td align="center" bgcolor="#b22222">:: Faculty Registration ::</td>
        </tr>
        <tr> 
         <td class="contentArea1">
		 <div class="errorMessage" align="center"><?php echo $errorMessage; ?></div>
		 
		  <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
              <tr>
                  <div align="right"><a href="login.php"><small><img src="images/back.png" alt="image" width="50" height="25"/></small></a>
              </tr>
           <tr class="entryTable">
             <td class="label1">&nbsp;User Name</td>
             <td class="content1"><input name="txtUserName" type="text" class="box" id="txtUserName" size="30" maxlength="20"></td>
           </tr>
           <tr class="entryTable">
             <td class="label1">&nbsp;Password</td>
             <td class="content1"><input name="txtPassword" type="password" class="box" id="txtPassword" value="" size="30" maxlength="20" /></td>
           </tr>
           <tr class="entryTable">
             <td class="label1"> &nbsp;User Type </td>
             <td class="content1"><select name="utype">
               <option value="faculty">&nbsp;&nbsp; Faculty &nbsp;</option>
               </select>			  </td>
           </tr>
           <tr class="entryTable">
             <td class="label1">&nbsp;Faculty ID. </td>
             <td class="content1"><input name="txtfacid" type="text" class="box" id="txtMob" value="" size="30" maxlength="20" /></td>
           </tr>
           <tr class="entryTable">
             <td class="label1">&nbsp;Section. </td>
             <td class="content1"><input name="txtsec" type="text" class="box" id="txtMob" value="" size="30" maxlength="20" /></td>
           </tr>
           <tr class="entryTable">
             <td class="label1">&nbsp;Mobile No. </td>
             <td class="content1"><input name="txtMob" type="text" class="box" id="txtMob" value="" size="30" maxlength="20" /></td>
           </tr>
		   
           <tr class="entryTable">
             <td class="label1"> &nbsp;E-mail</td>
            <td class="content1"><input name="Email" type="text" class="box" id="Email" value="" size="30" maxlength="60"></td>
           </tr>
           
           <tr>
             <td width="200">&nbsp;</td>
             <td width="372">&nbsp;</td>
           </tr>
           <tr> 
            <td>&nbsp;</td>
            <td><input name="btnLogin" type="submit" id="btnLogin" value=" Register Now " ></td>
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
</body>
</html>
