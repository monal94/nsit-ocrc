<?php
require_once './library/config.php';
require_once './library/functions.php';

checkUser();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	
	case 'makeComplain' :
		makeComplain();
	break;
	
	case 'makeComplainFac' :
		makeComplainFac();
	break;
	
        case 'assignComplain' :
		assignComplain();
	break;
	
	case 'assignComplainFac' :
		assignComplainFac();
	break;
	
    
        case 'commentOnComplain' :
		commentOnComplain();
	break;
	
	case 'commentOnComplainFac' :
		commentOnComplainFac();
	break;
	
        case 'closeComplain' :
		closeComplain();
	break;
	
        case 'closeComplainFac' :
		closeComplainFac();
	break;
	
    
        //deleteCust
	case 'deleteEmp' :
		deleteEmp();
	break;
	
	case 'deleteStd' :
		deleteStd();
	break;
	case 'deleteFac' :
		deleteFac();
	break;
	case 'addEmp' :
		addEmp();
	break;
	
	case 'addStudent' :
		addStudent();
	break;
	case 'addFaculty' :
		addFaculty();
	break;
	
	case 'editEmp' :
		editEmp();
	break;
	
	
	case 'editStudent' :
		editStudent();
	break;
		
	case 'editFaculty' :
		editFaculty();
	break;	
		
	default :
	    // if action is not defined or unknown
		// move to main user page
		header('Location: index.php');
}


function makeComplain()
{
	//echo 'Make Complain...';
    $compType = $_POST['compType'];
	$compTitle = $_POST['compTitle'];
	$compDesc = $_POST['compDesc'];
	$cust_id = (int)$_SESSION['user_id'];
	$cust_name = $_SESSION['user_name'];
	
	$sql = "INSERT INTO tbl_complains (cust_id, cust_name, comp_type, comp_title, comp_desc, status, eng_id, eng_name, eng_comment, create_date, close_date)
			VALUES ($cust_id, '$cust_name', '$compType', '$compTitle', '$compDesc', 'open', 0, '' , '', NOW(), '' )";
		
	//	echo $sql;		
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	header("Location: view.php?mod=student&view=compDetails");
	exit;	
}

function makeComplainFac()
{
	//echo 'Make Complain...';
    $compType = $_POST['compType'];
	$compTitle = $_POST['compTitle'];
	$compDesc = $_POST['compDesc'];
	$cust_id = (int)$_SESSION['user_id'];
	$cust_name = $_SESSION['user_name'];
	
	$sql = "INSERT INTO tbl_complainsf (cust_id, cust_name, comp_type, comp_title, comp_desc, status, eng_id, eng_name, eng_comment, create_date, close_date)
			VALUES ($cust_id, '$cust_name', '$compType', '$compTitle', '$compDesc', 'open', 0, '' , '', NOW(), '' )";
		
	//	echo $sql;		
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	header("Location: view.php?mod=faculty&view=compDetailsFac");
	exit;	
}


function addEmp()
{
	//echo 'Make Complain...';
    $EngineerName = $_POST['EngineerName'];
	$Password = $_POST['Password'];
	$Address = $_POST['Address'];
	$Email = $_POST['Email'];
	$Mobile = $_POST['Mobile'];
	
	$sql = "INSERT INTO tbl_employee (ename, epass, address, email, e_mobile, date_time) 
			VALUES ('$EngineerName', '$Password', '$Address', '$Email', '$Mobile', NOW())";
		
	$result = dbQuery($sql);
	header("Location: view.php?mod=admin&view=empDetails");	
	exit;	
}

function addStudent()
{
	//echo 'Make Complain...';
    $UserName = $_POST['txtUserName'];
	$Password = $_POST['txtPassword'];
	$Roll = $_POST['txtRoll'];
        $Branch = $_POST['txtbranch'];
        $Year = $_POST['txtyear'];
        $Mob = $_POST['txtMob'];
	$Email = $_POST['Email'];
	$sql = "INSERT INTO tbl_student (sname, spass, rollno, semandyear,branch,email, smobile, date_time) 
			VALUES ('$UserName', '$Password', '$Roll','$Year', '$Branch','$Email', '$Mob', NOW())";
		
	$result = dbQuery($sql);	
	header("Location: view.php?mod=admin&view=stdDetails");	
	exit;	
}


function addFaculty()
{
	//echo 'Make Complain...';
	 $UserName = $_POST['txtUserName'];
	$Password = $_POST['txtPassword'];
	$Facid = $_POST['txtfacid'];
        $Section = $_POST['txtsec'];
         $Mob = $_POST['txtMob'];
	$Email = $_POST['Email'];
		$sql = "INSERT INTO tbl_faculty (fname, fpass, facid,section, email, fmobile, date_time)
						  VALUES ('$UserName', '$Password', '$Facid','$Section','$Email','$Mob',NOW())";
	$result = dbQuery($sql);	
	header("Location: view.php?mod=admin&view=facDetails");	
	exit;	
}

function assignComplain()
{
	//echo 'Make Complain...';
    $compId = $_POST['compId'];
	$engId = (int)$_POST['engId'];
	$sql = "SELECT ename FROM tbl_employee WHERE eid = $engId";	
	$result = dbQuery($sql);
	while($row = dbFetchAssoc($result)){
		$eng_name = $row['ename'];
	}
	$sql = "UPDATE tbl_complains 
			SET status = 'assigned', 
				eng_id = $engId, 
				eng_name = '$eng_name'
			WHERE cid = $compId";	
			
	//	echo $sql;		
	$result = dbQuery($sql);
	header("Location: view.php?mod=admin&view=compDetails");	
	exit;	
}

function assignComplainFac()
{
	//echo 'Make Complain...';
    $compId = $_POST['compId'];
	$engId = (int)$_POST['engId'];
	$sql = "SELECT ename FROM tbl_employee WHERE eid = $engId";	
	$result = dbQuery($sql);
	while($row = dbFetchAssoc($result)){
		$eng_name = $row['ename'];
	}
	$sql = "UPDATE tbl_complainsf 
			SET status = 'assigned', 
				eng_id = $engId, 
				eng_name = '$eng_name'
			WHERE cid = $compId";	
			
	//	echo $sql;		
	$result = dbQuery($sql);
	header("Location: view.php?mod=admin&view=compDetailsFac");
	exit;	
}


function commentOnComplain()
{
	//echo 'Add Comment on Complain...';
    $compId = $_POST['compId'];
	$empComment = $_POST['empComment'];
	$engId = (int)$_SESSION['user_id'];
	$sql = "UPDATE tbl_complains 
			SET status = 'working',
				eng_comment = '$empComment' 
			WHERE cid = $compId";	
	$result = dbQuery($sql);
	header("Location: view.php?mod=employee&view=viewComplain");	
	exit;	
}

function commentOnComplainFac()
{
	//echo 'Add Comment on Complain...';
    $compId = $_POST['compId'];
	$empComment = $_POST['empComment'];
	$engId = (int)$_SESSION['user_id'];
	$sql = "UPDATE tbl_complainsf 
			SET status = 'working',
				eng_comment = '$empComment' 
			WHERE cid = $compId";	
	$result = dbQuery($sql);
	header("Location: view.php?mod=employee&view=viewComplain");	
	exit;	
}


function closeComplain()
{
	//echo 'Add Comment on Complain...';
    $compId = $_POST['compId'];
	$empComment = $_POST['empComment'];
	$sql = "UPDATE tbl_complains 
			SET status = 'close',
                            close_date = now(),
				eng_comment = '$empComment' 
			WHERE cid = $compId";	
	$result = dbQuery($sql);
	header("Location: view.php?mod=employee&view=viewComplainClose");
	exit;	
}

function closeComplainFac()
{
	//echo 'Add Comment on Complain...';
    $compId = $_POST['compId'];
	$empComment = $_POST['empComment'];
	$sql = "UPDATE tbl_complainsf 
			SET status = 'close',
                            close_date = now(),
				eng_comment = '$empComment' 
			WHERE cid = $compId";	
	$result = dbQuery($sql);
	header("Location: view.php?mod=employee&view=viewComplainClose");
	exit;	
}


function deleteEmp()
{
	//echo 'Add Comment on Complain...';
    $eId = $_GET['eId'];
	//$empComment = $_POST['empComment'];
	$sql = "DELETE FROM tbl_employee 
				WHERE eid = $eId";	
	$result = dbQuery($sql);
	header("Location: view.php?mod=admin&view=empDetails");	
	exit;	
}

function deleteStd()
{
	//echo 'Add Comment on Complain...';
    $sId = $_GET['sId'];
	//$empComment = $_POST['empComment'];
	$sql = "DELETE FROM tbl_student 
				WHERE sid = $sId";	
	$result = dbQuery($sql);
	header("Location: view.php?mod=admin&view=stdDetails");	
	exit;	
}
function deleteFac()
{
	//echo 'Add Comment on Complain...';
    $fId = $_GET['fId'];
	//$empComment = $_POST['empComment'];
	$sql = "DELETE FROM tbl_faculty 
				WHERE fid = $fId";	
	$result = dbQuery($sql);
	header("Location: view.php?mod=admin&view=facDetails");	
	exit;	
}


function editEmp()
{
	//echo 'Make Complain...';
    $eid = $_POST['eid'];
	$EngineerName = $_POST['EngineerName'];
	$Password = $_POST['Password'];
	$Address = $_POST['Address'];
	$Email = $_POST['Email'];
	$Mobile = $_POST['Mobile'];
	
	$sql = "UPDATE tbl_employee
			SET ename = '$EngineerName', 
				epass = '$Password', 
				address = '$Address', 
				email = '$Email', 
				e_mobile = '$Mobile'
			WHERE eid = $eid"; 	
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	header("Location: view.php?mod=admin&view=empDetails");	
	exit;	
}

function editStudent()
{
	//echo 'Make Complain...';
         $sid = $_POST['sid'];
	 $UserName = $_POST['txtUserName'];
	$Password = $_POST['txtPassword'];
	$Roll = $_POST['txtRoll'];
        $Branch = $_POST['txtbranch'];
        $Year = $_POST['txtyear'];
        $Mob = $_POST['txtMob'];
	$Email = $_POST['Email'];
	
	$sql = "UPDATE tbl_student 
			SET sname = '$UserName', 
				spass = '$Password', 
				rollno = '$Roll', 
				semandyear='$Year',
                                branch='$Branch',
                                email = '$Email', 
				smobile = '$Mob'
			WHERE sid = $sid"; 	
	$result = dbQuery($sql);
	header("Location: view.php?mod=admin&view=stdDetails");	
	exit;	
}


function editFaculty()
{
         $fid = $_POST['fid'];
	 $UserName = $_POST['txtUserName'];
	$Password = $_POST['txtPassword'];
	$Facid = $_POST['txtfacid'];
        $Section = $_POST['txtsec'];
         $Mob = $_POST['txtMob'];
	$Email = $_POST['Email'];
	
	$sql = "UPDATE tbl_faculty
			SET fname = '$UserName', 
				fpass = '$Password', 
				facid = '$Facid', 
				section='$Section',
                                email = '$Email', 
				fmobile = '$Mob'
			WHERE fid = $fid"; 	
	$result = dbQuery($sql);
	header("Location: view.php?mod=admin&view=facDetails");	
	exit;	
}





?>