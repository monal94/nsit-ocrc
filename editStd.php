<script type="text/JavaScript">
</script>
<?php 
$sid = (int)$_GET['sId'];
$sql= "SELECT * FROM tbl_student WHERE sid = $sid";
$result = dbQuery($sql);
while($data = dbFetchAssoc($result)){
extract($data);
?>
<h3>Edit Student Details - Admin View</h3>
<form action="process.php?action=editStudent" method="post"  name="frmListUser" id="frmListUser">
  <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      <td>:: Add Student Details ::</td>
    </tr>
    <tr>
      <td class="contentArea"><div class="errorMessage" align="center"><?php //echo $errorMessage; ?></div>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right">
			  <input type="hidden" name="sid" value="<?php echo $sid; ?>" />
			  </div></td>
            </tr>
            <tr class="entryTable">
             <td class="label">&nbsp;User Name</td>
             <td class="content"><input name="txtUserName" type="text" class="box" id="txtUserName" size="30" maxlength="20" value="<?php echo $sname; ?>"></td>
           </tr>
           <tr class="entryTable">
             <td class="label">&nbsp;Password</td>
             <td class="content"><input name="txtPassword" type="password" class="box" id="txtPassword" value="<?php echo $spass; ?>" size="30" maxlength="20" /></td>
           </tr>
  
           <tr class="entryTable">
             <td class="label">&nbsp;Roll No. </td>
             <td class="content"><input name="txtRoll" type="text" class="box" id="txtRoll" size="30" maxlength="20" value="<?php echo $rollno; ?>" /></td>
           </tr>
           <tr class="entryTable">
             <td class="label">&nbsp;Sem/Year </td>
             <td class="content"><input name="txtyear" type="text" class="box" id="txtyear"  size="30" maxlength="20" value="<?php echo $semandyear; ?>" /></td>
           </tr>
           
           <tr class="entryTable">
             <td class="label">&nbsp;Branch. </td>
             <td class="content"><input name="txtbranch" type="text" class="box" id="txtbranch"  size="30" maxlength="20" value="<?php echo $branch; ?>" /></td>
           </tr>
           <tr class="entryTable">
             <td class="label"> &nbsp;E-mail</td>
            <td class="content"><input name="Email" type="text" class="box" id="Email"  size="30" maxlength="60" value="<?php echo $email; ?>"></td>
           </tr>
           
           <tr class="entryTable">
             <td class="label">&nbsp;Mobile No. </td>
             <td class="content"><input name="txtMob" type="text" class="box" id="txtMob"  size="30" maxlength="20" value="<?php echo $smobile; ?>" /></td>
           </tr>
		   
           
            <tr>
              <td width="200">&nbsp;</td>
              <td width="372">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="btnLogin" type="submit" id="btnLogin" onclick="MM_validateForm('txtUserName','','R','txtPassword','','R','txtRoll','','R','txtyear','','R','txtbranch','','R','Email','','RisEmail','txtMob','','R');return document.MM_returnValue" value=" Register Now "></td>
            </tr>
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<?php } ?>
<p>&nbsp;</p>
