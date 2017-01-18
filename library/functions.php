<?php

/*
	Check if a session user id exist or not. If not set redirect
	to login page. If the user session id exist and there's found
	$_GET['logout'] in the query string logout the user
*/
function checkUser()
{
	// if the session id is not set, redirect to login page
	if (!isset($_SESSION['user_id'])) {
		header('Location: ' . WEB_ROOT . 'login.php');
		exit;
	}
	
	// the user want to logout
	if (isset($_GET['logOut'])) {
		doLogout();
	}
}

/*
	
*/
function doLogin()
{
	// if we found an error save the error message in this variable
	$errorMessage = '';
	
	$userName = $_POST['txtUserName'];
	$password = $_POST['txtPassword'];
	$uType    = $_POST['utype'];
	// first, make sure the username & password are not empty
	if ($userName == '') {
		$errorMessage = 'You must enter your username';
	} else if ($password == '') {
		$errorMessage = 'You must enter the password';
	} else {
		
		//check if user is student
		if($uType == 'student')
		{
			$sql = "SELECT  sid, sname
					FROM tbl_student
					WHERE sname = '$userName' AND spass = '$password'";
			$result = dbQuery($sql);
			if (dbNumRows($result) == 1) {
				$row = dbFetchAssoc($result);
				$_SESSION['user_id'] = $row['sid'];
				$_SESSION['user_name'] = $row['sname'];
				$_SESSION['user_type'] = $uType;
                                header('Location: '.WEB_ROOT.'index.php');
			exit;		
			}
                        else {
				$errorMessage = 'Either UserName and Password is incorrect or your choose the correct Role. Please check your details';
			}
                        
                        
			
		}//if
                
                
               elseif($uType == 'faculty')
		{
			$sql = "SELECT  fid, fname
					FROM tbl_faculty
					WHERE fname = '$userName' AND fpass = '$password'";
			$result = dbQuery($sql);
			if (dbNumRows($result) == 1) {
				$row = dbFetchAssoc($result);
				$_SESSION['user_id'] = $row['fid'];
				$_SESSION['user_name'] = $row['fname'];
				$_SESSION['user_type'] = $uType;
                                header('Location: '.WEB_ROOT.'index.php');
			exit;		
			}
                        else {
				$errorMessage = 'Either UserName and Password is incorrect or your choose the correct Role. Please check your details';
			}
                        
                        
			
		}//if
                
		elseif($uType == 'employee')
		{
			$sql = "SELECT  eid, ename
					FROM tbl_employee
					WHERE ename = '$userName' AND epass = '$password'";
			$result = dbQuery($sql);
			if (dbNumRows($result) == 1) {
				$row = dbFetchAssoc($result);
				$_SESSION['user_id'] = $row['eid'];
				$_SESSION['user_name'] = $row['ename'];
				$_SESSION['user_type'] = $uType;
                                header('Location: '.WEB_ROOT.'index.php');
			exit;	
			}//if
                        else {
				$errorMessage = 'Either UserName and Password is incorrect or you chose the incorrect Role. Please check your details';
			}
			
                        
		}
		elseif($uType == 'admin'){
			//$_SESSION['user_id'] = $row['sid'];
			if($userName == 'admin' && $password == 'admin' || $userName == 'adminNVD' && $password == 'nvd'){
				$_SESSION['user_id'] = 0;
				$_SESSION['user_name'] = 'Administrator';
				$_SESSION['user_type'] = 'admin';
				header('Location: '.WEB_ROOT.'index.php');
				exit;
			}
			else {
				$errorMessage = 'Either UserName and Password is incorrect or you chose the incorrect Role. Please check your details';
			}//else
		}//if Admin
		else {
			$errorMessage = 'Please Select a valid feild. Please try again.';
		}//else		
			
	}//else
	return $errorMessage;
}
/*
	Register
*/

function doRegister()
{
	// if we found an error save the error message in this variable
	$errorMessage = '';
	
	$userName = $_POST['txtUserName'];
	$password = $_POST['txtPassword'];
	$utype = $_POST['utype'];
	$txtRoll = $_POST['txtRoll'];
        $txtyear=$_POST['txtyear'];
        $txtbranch=$_POST['txtbranch'];
	$txtMob = $_POST['txtMob'];
	$txtEmail = $_POST['Email'];
        $txtfacid=$_POST['txtfacid'];
        $txtsec=$_POST['txtsec'];
      	if($utype == 'student'){
	if ($userName == '') {
		$errorMessage = 'You must enter your username';
	} else if ($password == '') {
		$errorMessage = 'You must enter the password';
	}else if ($txtRoll == '') {
		$errorMessage = 'You must enter the Roll No.';
	}else if ($txtbranch == '') {
		$errorMessage = 'You must enter the Branch.';
	}else if ($txtyear == '') {
		$errorMessage = 'You must enter your semester and year.';
	}else if ($txtMob == '') {
		$errorMessage = 'You must enter the Mobile No.';
	}else if (strlen($txtMob) != 10) { 
		$errorMessage = 'Mobile No. must contain 10 digits';
	}else if ($txtEmail == '') {
		$errorMessage = 'You must enter the E-mail.';
	}else {
			$sql = "SELECT sname
					FROM tbl_student
					WHERE sname = '$userName'";
			$result = dbQuery($sql);
			if (dbNumRows($result) == 1) {
				$errorMessage = 'Username already taken. Choose another one';	
			} else {			
				$sql   = "INSERT INTO tbl_student (sname, spass, rollno, semandyear,branch,email,smobile, date_time)
						  VALUES ('$userName', '$password', '$txtRoll','$txtyear','$txtbranch','$txtEmail','$txtMob',NOW())";
				dbQuery($sql);
				$errorMessage = 'Registration is Successful. You can Login Now.';
				header('Location: login.php');	
			}
		}
        
        }
	if($utype == 'faculty'){
        if ($userName == '') {
		$errorMessage = 'You must enter your username';
	} else if ($password == '') {
		$errorMessage = 'You must enter the password';
	}else if ($txtfacid == '') {
		$errorMessage = 'You Must Enter The Faculty ID.';
	}else if ($txtsec == '') {
		$errorMessage = 'You must enter you section.';
	}else if ($txtMob == '') {
		$errorMessage = 'You must enter the Mobile No.';
	}else if (strlen($txtMob) != 10) { 
		$errorMessage = 'Mobile No. must contain 10 digits';
	}else if ($txtEmail == '') {
		$errorMessage = 'You must enter the E-mail.';
	}else {    
            
			$sql = "SELECT fname
					FROM tbl_faculty
					WHERE fname = '$userName'";
			$result = dbQuery($sql);
			if (dbNumRows($result) == 1) {
				$errorMessage = 'Username already taken. Choose another one';	
			} else {			
			$sql   = "INSERT INTO tbl_faculty (fname, fpass, facid,section, email, fmobile, date_time)
						  VALUES ('$userName', '$password', '$txtfacid','$txtsec','$txtEmail','$txtMob',NOW())";
				dbQuery($sql);
				$errorMessage = 'Registration is Successful. You can Login Now.';
				header('Location: login.php');	
        }
        
                        }
		}//else		//else
	return $errorMessage;
}

/*
	Logout a user
*/
function doLogout()
{
	if (isset($_SESSION['user_id'])) {
		unset($_SESSION['user_id']);
		session_unregister('user_id');
	}
	if (isset($_SESSION['user_name'])) {
		unset($_SESSION['user_name']);
		session_unregister('user_name');
	}
	if (isset($_SESSION['user_type'])) {
		unset($_SESSION['user_type']);
		session_unregister('user_type');
	}
		
	header('Location: login.php');
	exit;
}


/*
	Generate combo box options containing the categories we have.
	if $catId is set then that category is selected
*/
function buildCategoryOptions($catId = 0)
{
	$sql = "SELECT cat_id, cat_parent_id, cat_name
			FROM tbl_category
			ORDER BY cat_id";
	$result = dbQuery($sql) or die('Cannot get Product. ' . mysql_error());
	
	$categories = array();
	while($row = dbFetchArray($result)) {
		list($id, $parentId, $name) = $row;
		
		if ($parentId == 0) {
			// we create a new array for each top level categories
			$categories[$id] = array('name' => $name, 'children' => array());
		} else {
			// the child categories are put int the parent category's array
			$categories[$parentId]['children'][] = array('id' => $id, 'name' => $name);	
		}
	}	
	
	// build combo box options
	$list = '';
	foreach ($categories as $key => $value) {
		$name     = $value['name'];
		$children = $value['children'];
		
		$list .= "<optgroup label=\"$name\">"; 
		
		foreach ($children as $child) {
			$list .= "<option value=\"{$child['id']}\"";
			if ($child['id'] == $catId) {
				$list.= " selected";
			}
			
			$list .= ">{$child['name']}</option>\r\n";
		}
		
		$list .= "</optgroup>";
	}
	
	return $list;
}

/*
	Create the paging links
*/
function getPagingNav($sql, $pageNum, $rowsPerPage, $queryString = '')
{
	$result  = mysql_query($sql) or die('Error, query failed. ' . mysql_error());
	$row     = mysql_fetch_array($result, MYSQL_ASSOC);
	$numrows = $row['numrows'];
	
	// how many pages we have when using paging?
	$maxPage = ceil($numrows/$rowsPerPage);
	
	$self = $_SERVER['PHP_SELF'];
	
	// creating 'previous' and 'next' link
	// plus 'first page' and 'last page' link
	
	// print 'previous' link only if we're not
	// on page one
	if ($pageNum > 1)
	{
		$page = $pageNum - 1;
		$prev = " <a href=\"$self?page=$page{$queryString}\">[Prev]</a> ";
	
		$first = " <a href=\"$self?page=1{$queryString}\">[First Page]</a> ";
	}
	else
	{
		$prev  = ' [Prev] ';       // we're on page one, don't enable 'previous' link
		$first = ' [First Page] '; // nor 'first page' link
	}
	
	// print 'next' link only if we're not
	// on the last page
	if ($pageNum < $maxPage)
	{
		$page = $pageNum + 1;
		$next = " <a href=\"$self?page=$page{$queryString}\">[Next]</a> ";
	
		$last = " <a href=\"$self?page=$maxPage{$queryString}{$queryString}\">[Last Page]</a> ";
	}
	else
	{
		$next = ' [Next] ';      // we're on the last page, don't enable 'next' link
		$last = ' [Last Page] '; // nor 'last page' link
	}
	
	// return the page navigation link
	return $first . $prev . " Showing page <strong>$pageNum</strong> of <strong>$maxPage</strong> pages " . $next . $last; 
}

function doChangePassword()
{
	// if we found an error save the error message in this variable
	$errorMessage = '';
	
	$userName = $_POST['txtUserName'];
	$email = $_POST['txtEmail'];
	$uType    = $_POST['utype'];
	// first, make sure the username & password are not empty
	if ($userName == '') {
		$errorMessage = 'You must enter your username';
	} else if ($email == '') {
		$errorMessage = 'You must enter the Email';
	} else {
		
		//check if user is customer
		if($uType == 'student')
		{
			$sql = "SELECT  sname, spass
					FROM tbl_student
					WHERE sname = '$userName' AND email = '$email'";
			$result = dbQuery($sql);
			if (dbNumRows($result) == 1) {
				$row = dbFetchAssoc($result);
				$npass = $row['spass'];
				$errorMessage = "Your password is $npass. You can <a href='login.php'>Login Now</a>.";	
			}else {
				$errorMessage = "Wrong credentials entered, or you are not registered.";
			}
					
		}//if
		
                elseif($uType == 'faculty')
		{
			$sql = "SELECT  fname, fpass
					FROM tbl_faculty
					WHERE fname = '$userName' AND email = '$email'";
			$result = dbQuery($sql);
			if (dbNumRows($result) == 1) {
				$row = dbFetchAssoc($result);
				$npass = $row['fpass'];
				$errorMessage = "Your password is $npass. You can <a href='login.php'>Login Now</a>.";	
			}else {
				$errorMessage = "Wrong credentials entered, or you are not registered.";
			}
					
		}//if
		
                elseif($uType == 'employee')
		{
			$sql = "SELECT  eid, ename, epass
					FROM tbl_employee
					WHERE ename = '$userName' AND email = '$email'";
			$result = dbQuery($sql);
			if (dbNumRows($result) == 1) {
				$row = dbFetchAssoc($result);
				$npass = $row['epass'];
				$errorMessage = "Your password is $npass. You can <a href='login.php'>Login Now</a>.";
			}else {
				$errorMessage = "You are not a Valid Engineer.";
			}		
		}
				
			
	}//else
	return $errorMessage;
}


?>