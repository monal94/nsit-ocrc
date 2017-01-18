<script type="text/JavaScript">
</script>
<?php 
$fid = (int)$_GET['fId'];
$sql= "SELECT * FROM tbl_faculty WHERE fid = $fid";
$result = dbQuery($sql);
while($data = dbFetchAssoc($result)){
extract($data);
?>
<h3>Edit Faculty Details - Admin View</h3>
<form action="process.php?action=editFaculty" method="post"  name="frmListUser" id="frmListUser">
  <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      <td>:: Add Faculty Details ::</td>
    </tr>
    <tr>
      <td class="contentArea"><div class="errorMessage" align="center"><?php //echo $errorMessage; ?></div>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right">
			  <input type="hidden" name="fid" value="<?php echo $fid; ?>" />
			  </div></td>
            </tr>
            <tr class="entryTable">
             <td class="label">&nbsp;User Name</td>
             <td class="content"><input name="txtUserName" type="text" class="box" id="txtUserName" size="30" maxlength="20" value="<?php echo $fname; ?>"></td>
           </tr>
           <tr class="entryTable">
             <td class="label">&nbsp;Password</td>
             <td class="content"><input name="txtPassword" type="password" class="box" id="txtPassword" value="<?php echo $fpass; ?>" size="30" maxlength="20" /></td>
           </tr>
  
          <tr class="entryTable">
             <td class="label">&nbsp;Faculty ID. </td>
             <td class="content"><input name="txtfacid" type="text" class="box" id="txtfacid" value="<?php echo $facid; ?>" size="30" maxlength="20" /></td>
           </tr>
           <tr class="entryTable">
             <td class="label">&nbsp;Section. </td>
             <td class="content"><input name="txtsec" type="text" class="box" id="txtsec" value="<?php echo $section; ?>" size="30" maxlength="20" /></td>
           </tr>
           <tr class="entryTable">
             <td class="label">&nbsp;Mobile No. </td>
             <td class="content"><input name="txtMob" type="text" class="box" id="txtMob" value="<?php echo $fmobile; ?>" size="30" maxlength="20" /></td>
           </tr>
		   
           <tr class="entryTable">
             <td class="label"> &nbsp;E-mail</td>
            <td class="content"><input name="Email" type="text" class="box" id="Email" value="<?php echo $email; ?>" size="30" maxlength="60"></td>
           </tr>
           
		   
           
            <tr>
              <td width="200">&nbsp;</td>
              <td width="372">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="btnLogin" type="submit" id="btnLogin" onclick="MM_validateForm('txtUserName','','R','txtPassword','','R','txtfacid','','R','txtsec','','R','Email','','RisEmail','txtMob','','R');return document.MM_returnValue" value=" Register Now "></td>
            </tr>
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<?php } ?>
<p>&nbsp;</p>
