<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<h3>Add New Faculty Details - Admin View</h3>
<form action="process.php?action=addFaculty" method="post"  name="frmListUser" id="frmListUser">
  <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      <td>:: Add Faculty Details ::</td>
    </tr>
    <tr>
      <td class="contentArea"><div class="errorMessage" align="center"><?php //echo $errorMessage; ?></div>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right">
			  <input type="hidden" name="sid" value="" />
			  </div></td>
            </tr>
            <tr class="entryTable">
             <td class="label">&nbsp;User Name</td>
             <td class="content"><input name="txtUserName" type="text" class="box" id="txtUserName" size="30" maxlength="20" value=""></td>
           </tr>
           <tr class="entryTable">
             <td class="label">&nbsp;Password</td>
             <td class="content"><input name="txtPassword" type="password" class="box" id="txtPassword" value="" size="30" maxlength="20" /></td>
           </tr>
  
          <tr class="entryTable">
             <td class="label">&nbsp;Faculty ID. </td>
             <td class="content"><input name="txtfacid" type="text" class="box" id="txtfacid" value="" size="30" maxlength="20" /></td>
           </tr>
           <tr class="entryTable">
             <td class="label">&nbsp;Section. </td>
             <td class="content"><input name="txtsec" type="text" class="box" id="txtsec" value="" size="30" maxlength="20" /></td>
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
              <td><input name="btnLogin" type="submit" id="btnLogin" onclick="MM_validateForm('txtUserName','','R','txtPassword','','R','txtfacid','','R','txtsec','','R','Email','','RisEmail','txtMob','','R');return document.MM_returnValue" value=" Register Now "></td>
            </tr>
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
