<?php
$u = _SESSION['user_name'];
if($_SESSION['user_type'] == 'student'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Student Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome Student,&nbsp;<? echo $u; ?></a></li>
			<!--<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=selectPlans">Select Complaint Category</a></li>-->
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=student&view=makeComplain">Make Complains</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=student&view=compDetails">View Complain Details</a></li>
			<li><a href="login.php">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php 
}
else if($_SESSION['user_type'] == 'employee'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Employee Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome ,&nbsp;<? echo ucwords($_SESSION['user_name']); ?></a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=employee&view=viewComplain">Assigned Complains </a></li>
                        <li><a href="<?php echo WEB_ROOT; ?>view.php?mod=employee&view=viewComplainClose">Close Complain</a></li>
			<li><a href="login.php">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
	 
<?php 
}
else if($_SESSION['user_type'] == 'faculty'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Faculty Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome Faculty,&nbsp;<? echo $u; ?></a></li>
			<!--<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=selectPlans">Select Complaint Category</a></li>-->
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=faculty&view=makeComplain">Make Complains</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=faculty&view=compDetailsFac">View Complain Details</a></li>
			<li><a href="login.php">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php 
}else if($_SESSION['user_type'] == 'admin'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Admin Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome,&nbsp;<? echo ucwords($_SESSION['user_name']); ?></a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=compDetails">Students Complains Assign  </a></li>
                        <li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=compDetailsFac"> Faculty Complains Assign </a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=vDetails">View Complains</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=compCloseDetails">View Close Complain</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=stdDetails">Student Details</a></li>
                        <li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=facDetails">Faculty Details</a></li>
                        <li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=empDetails">Employee Details</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=reports">Reports</a></li>
			<li><a href="login.php">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php 
}
?>
