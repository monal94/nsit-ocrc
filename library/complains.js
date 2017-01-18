// JavaScript Document
function checkAddUserForm()
{
	with (window.document.frmAddUser) {
		if (isEmpty(txtUserName, 'Enter user name')) {
			return;
		} else if (isEmpty(txtPassword, 'Enter password')) {
			return;
		} else {
			submit();
		}
	}
}

function viewComplainDetail(compId)
{
	window.location.href = 'view.php?mod=admin&view=viewByCompID&compId='+compId;
}

function viewComplainDetailFac(compId)
{
	window.location.href = 'view.php?mod=admin&view=viewByCompIDFac&compId='+compId;
}


function viewEmployeeComDetail(compId)
{
	window.location.href = 'view.php?mod=employee&view=viewByCompID&compId='+compId;
}

function viewEmployeeComDetailFac(compId)
{
	window.location.href = 'view.php?mod=employee&view=viewByCompIDFac&compId='+compId;
}


function closeComplain(compId)
{
	window.location.href = 'view.php?mod=employee&view=closeComplain&compId='+compId;
}


function closeComplainFac(compId)
{
	window.location.href = 'view.php?mod=employee&view=closeComplainFac&compId='+compId;
}


function changePassword(userId)
{
	window.location.href = 'index.php?view=modify&userId=' + userId;
}

function deleteEmp(eId)
{
	if (confirm('Do you want to delete this Employee?')) {
		window.location.href = 'process.php?action=deleteEmp&eId=' + eId;
	}
}

function editEmpDetail(eId)
{
	var url = 'view.php?mod=admin&view=doEdit&eId=' + eId;
	//alert(url);
	window.location.href  = url;
}

function deleteStd(sId)
{
	if (confirm('Do you want to delete this Student?')) {
		window.location.href = 'process.php?action=deleteStd&sId=' + sId;
	}
}

function editStdDetail(sId)
{
	var url = 'view.php?mod=admin&view=doEditStd&sId=' + sId;
	//alert(url);
	window.location.href  = url;
}
function deleteFac(fId)
{
	if (confirm('Do you want to delete this Faculty?')) {
		window.location.href = 'process.php?action=deleteFac&fId=' + fId;
	}
}

function editFacDetail(fId)
{
	var url = 'view.php?mod=admin&view=doEditFac&fId=' + fId;
	//alert(url);
	window.location.href  = url;
}

