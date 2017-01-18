<?php
require_once './library/config.php';
require_once './library/functions.php';

//$_SESSION['login_return_url'] = $_SERVER['REQUEST_URI'];
checkUser();

$mod = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

if($mod == 'student'){
	switch ($view) {
	
		case 'makeComplain' :
			$content 	= 'makeComplain.php';		
			$pageTitle 	= 'Complain Management System - Make Complains';
		break;
		
		case 'compDetails' :
			$content 	= 'compDetails.php';		
			$pageTitle 	= 'Complain Management System - View Complains Detail';
		break;
		
		case 'feedback' :
			$content 	= 'feedback.php';		
			$pageTitle 	= 'Complain Management System - Give Your Complains';
		break;
		
			}//switch
}//if
elseif($mod == 'faculty'){
	switch ($view) {
	
		case 'makeComplain' :
			$content 	= 'makeComplainFac.php';		
			$pageTitle 	= 'Complain Management System - Make Complains';
		break;
		
		case 'compDetailsFac' :
			$content 	= 'compDetailsFac.php';		
			$pageTitle 	= 'Complain Management System - View Complains Detail';
		break;
		
		case 'feedback' :
			$content 	= 'feedback.php';		
			$pageTitle 	= 'Complain Management System - Give Your Complains';
		break;
		
			}//switch
}//if

elseif($mod == 'admin'){
	switch ($view) {
	
		case 'compDetails' :
			$content 	= 'adminCompDetails.php';		
			$pageTitle 	= 'Complain Management System - View Complains Detail';
		break;
		
		case 'compDetailsFac' :
			$content 	= 'adminCompDetailsFac.php';		
			$pageTitle 	= 'Complain Management System - View Complains Detail';
		break;
		
                case 'repo' :
			$content 	= 'repo.php';		
			$pageTitle 	= 'Complain Management System - View Complains Detail';
		break;
		
		case 'empRep' :
			$content 	= 'empRep.php';		
			$pageTitle 	= 'Complain Management System - Detail Reports';
		break;
		
		case 'stdRep' :
			$content 	= 'stdRep.php';		
			$pageTitle 	= 'Complain Management System - Detail Reports';
		break;
		
                case 'facRep' :
			$content 	= 'facRep.php';		
			$pageTitle 	= 'Complain Management System - Detail Reports';
		break;
		
                case 'reports' :
			$content 	= 'reports.php';		
			$pageTitle 	= 'Complain Management System - Reports';
		break;
		
		case 'compCloseDetails' :
			$content 	= 'adminCompCloseDetails.php';		
			$pageTitle 	= 'Complain Management System - View Close Complains';
		break;
		
		case 'vDetails' :
			$content 	= 'viewEnggDetails.php';		
			$pageTitle 	= 'Complain Management System - View Engineer Details';
		break;
		
		case 'empDetails' :
			$content 	= 'empDetails.php';		
			$pageTitle 	= 'View Employee Details';
		break;
		
		case 'stdDetails' :
			$content 	= 'stdDetails.php';		
			$pageTitle 	= 'Complain Management System - View Engineer Details';
		break;
		
                case 'facDetails' :
			$content 	= 'facDetails.php';		
			$pageTitle 	= 'Complain Management System - View Engineer Details';
		break;
		
            
		case 'viewByCompID' :
			$content 	= 'viewByCompID.php';		
			$pageTitle 	= 'Complain Management System - Give Your Complains';
		break;
		
		case 'viewByCompIDFac' :
			$content 	= 'viewByCompIDFac.php';		
			$pageTitle 	= 'Complain Management System - Give Your Complains';
		break;
		
                case 'doEdit' :
			$content 	= 'editEmp.php';		
			$pageTitle 	= 'Edit Employee';
		break;
		
		case 'doEditStd' :
			$content 	= 'editStd.php';		
			$pageTitle 	= 'Edit Student';
		break;
		case 'doEditFac' :
			$content 	= 'editFac.php';		
			$pageTitle 	= 'Edit Faculty';
		break;
		case 'addEmp' :
			$content 	= 'addEmp.php';		
			$pageTitle 	= 'Complain Management System - Edit Engineer';
		break;
		
		case 'addStudent' :
			$content 	= 'addStudent.php';		
			$pageTitle 	= 'Add Student';
		break;
                case 'addFaculty' :
			$content 	= 'addFaculty.php';		
			$pageTitle 	= 'Add Faculty';
		break;
	}//switch
}//if
elseif($mod == 'employee'){
	switch ($view) {
	
		case 'viewComplain' :
			$content 	= 'employeeCompDetails.php';		
			$pageTitle 	= 'Complain Management System - View Complains Detail';
		break;
		
		case 'viewComplainClose' :
			$content 	= 'employeeCompClose.php';		
			$pageTitle 	= 'Complain Management System - View Complains Detail';
		break;
		
		case 'viewByCompID' :
			$content 	= 'empViewByCompID.php';		
			$pageTitle 	= 'Complain Management System - View Complains / Add Comment';
		break;
		
		case 'viewByCompIDFac' :
			$content 	= 'empViewByCompIDFac.php';		
			$pageTitle 	= 'Complain Management System - View Complains / Add Comment';
		break;
		
                case 'closeComplain' :
			$content 	= 'closeComplain.php';		
			$pageTitle 	= 'Complain Management System - Close complain';
		break;
                
                case 'closeComplainFac' :
			$content 	= 'closeComplainFac.php';		
			$pageTitle 	= 'Complain Management System - Close complain';
		break;

	}//switch
}//if

require_once './include/template.php';

?>
