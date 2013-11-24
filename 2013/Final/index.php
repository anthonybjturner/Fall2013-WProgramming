<?php
include_once 'inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

$errors = null;
switch ($action) {
	
	case 'today-deals':
		
		$view 	= 'Views/FrontEnd/today-deals.php';			
		$title	= "todays details";	
		break;
		
	case 'wishlist':
		
		$view 	= 'Views/FrontEnd/wishlist.php';			
		$title	= "wishlist";	
		break;
		
	case 'about':
		
		$view 	= 'Views/FrontEnd/about.php';			
		$title	= "About";	
		break;
		
	case 'contact':
		
		$view 	= 'Views/FrontEnd/contact.php';			
		$title	= "Contact";	
		break;
		
	case 'signin':
		
		$model = Users::Blank();
		$view 	= 'Views/FrontEnd/edit.php';			
		$title	= "Sign in";	
		break;
		
	case 'save':
		
		//$errors = Users::Validate($_REQUEST);
		$user = $_REQUEST['FirstName'];
		$model  = Users::Get();
		$login = $user;
		
		//print_r($model);
	
		$view 	= 'Views/FrontEnd/list.php';
		$title	= "Welcome back ".$login;	
		break;

	default:
		$model  = Users::Get();
		$view 	= 'Views/FrontEnd/list.php';
		$title	= 'Welcome';		
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
