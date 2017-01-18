<?php 
$id = $_GET['id'];  
//echo $id;
?>
<h3>Report - Admin View</h3>


<form action="processLeave.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">
  
    <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
  
      <tr align="center" id="listTableHeader">
      <td width="303">Student Name</td>
      <td width="260">Student Roll Number </td>
      <td width="150">Student Semester/Year</td>
      <td width="150">Student Department</td>
      <td width="150">Student Email ID</td>
      <td width="150">Student Contact</td>
    </tr>
    <?php
    
	$sql = "SELECT *
			FROM tbl_student
			LIMIT 0,20";
	$result = dbQuery($sql);
	$i=0;
	while($row = dbFetchRow($result)) {
	//extract($row);
	if ($i%2) {
		$class = 'row1';
	} else {
		$class = 'row2';
	}
	$i += 1;
	?>
    <tr class="<?php echo $class; ?>" style="height:25px;">
      <td width="344" align="center"><?php echo ucwords($row[1]); ?></td>
      <td width="344" align="center"><?php echo ucwords($row[3]); ?></td>
      <td width="284" align="center"><?php echo ucwords($row[4]); ?></td>
      <td width="270" align="center"><?php echo ucwords($row[5]); ?></td>
      <td width="270" align="center"><?php echo ucwords($row[6]); ?></td>
      <td width="270" align="center"><?php echo ucwords($row[7]); ?></td>
      
    </tr>
    <?php
	} // end while
	?>
    <tr>
      <td colspan="5">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" align="right">&nbsp;</td>
    </tr>
  </table>
  
  <p>&nbsp;</p>
</form>
    
<p>&nbsp;</p>
