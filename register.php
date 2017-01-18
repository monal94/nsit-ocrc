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
<title>Complain Management System - Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="include/admin.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/main.css" rel="stylesheet" type="text/css">
<script type="text/JavaScript">
</script>
</head>
<body>
<br/><br/>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
 <tr> 
  <td><img src="images/complains.jpg" width="900" height="120"></td>
 </tr>
 <tr> 
  <td valign="top">
   <table width="100%" border="0" cellspacing="0" cellpadding="20" align="center">
    <tr> 
     <td class="contentArea"> 
	 <form method="post" name="frmUserReg" id="frmUserReg" action="">
       <p>&nbsp;</p>
       <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
        <tr id="entryTableHeader"> 
         <td>:: Student Registration ::</td>
        </tr>
        <tr> 
         <td class="contentArea"> 
		 <div class="errorMessage" align="center"><?php echo $errorMessage; ?></div>
		 
		  <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
           <tr align="center"> 
            <td colspan="2"><div align="right"><a href="login.php">Back</a></div></td>
           </tr>
           <tr class="entryTable">
             <td class="label">&nbsp;User Name</td>
             <td class="content"><input name="txtUserName" type="text" class="box" id="txtUserName" size="30" maxlength="20"></td>
           </tr>
           <tr class="entryTable">
             <td class="label">&nbsp;Password</td>
             <td class="content"><input name="txtPassword" type="password" class="box" id="txtPassword" value="" size="30" maxlength="20" /></td>
           </tr>
           <tr class="entryTable">
             <td class="label"> &nbsp;User Type </td>
             <td class="content"><select name="utype">
               <option value="customer">&nbsp;&nbsp; Customer &nbsp;</option>
               </select>			  </td>
           </tr>
           <tr class="entryTable">
             <td valign="top" class="label">&nbsp;Address.</td>
             <td class="content"><textarea name="txtAdd" cols="40" rows="4" class="box" id="txtAdd"></textarea></td>
           </tr>
           <tr class="entryTable">
             <td class="label">&nbsp;Mobile No. </td>
             <td class="content"><input name="txtMob" type="text" class="box" id="txtMob" value="" size="30" maxlength="20" /></td>
           </tr>
		   
           <tr class="entryTable">
             <td class="label"> &nbsp;E-mail</td>
            <td class="content"><input name="Email" type="text" class="box" id="Email" value="" size="30" maxlength="60"></td>
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
