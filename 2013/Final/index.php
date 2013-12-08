<?php
include_once 'inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
@$type = $_REQUEST['type'];

$errors = null;
switch ($action) {
	
	default:

		$title	= 'Welcome';		
		header("Location: Views/Home/index.php");
		break;
}

switch ($format) {
	case 'dialog':
		include '../Shared/_DialogLayout.php';				
		break;
		
	case 'plain':
		include $view;
		break;
		
	case 'json':
		echo json_encode(array('model'=> $model, 'errors'=> $errors));
		break;
	
	default:
		include 'Views/Shared/_Layout.php';		
		break;
}
