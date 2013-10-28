<?php

include_once "../../inc/_global.php";

@$action = $_REQUEST['action'];//Merges together the GET and POST
@$format = $_REQUEST['format'];
//@$action = $_GET['action']; 


switch ($action) {
	
	case 'details':
		
		$model = Users::Get($_REQUEST['id']);
		$view  = 'details.php';
		break;
		
	case 'new':
		$model = Users::Blank();
		$view  = 'edit.php';
		break;
		
	case 'save':
		
		$errors = Users::Validate($_REQUEST);//Check validation if it is good
		if(!$errors){
			
			$errors = Users::Save($_REQUEST);//Save
		}
		
		//If there are still no errrors then we redirect
		if( !$errors){
			
			header("Location: ?");
			die();//Kills preproccesor processing
			
		}
		
		$model = $_REQUEST;
		$view = 'edit.php';
		break;

	case 'edit':
		
		$model = Users::Get($_REQUEST['id']);
		$view  = 'edit.php';
		break;
		
	case 'delete':
		
		$model = Users::Get($_REQUEST['id']);
		$view  = 'details.php';
		break;
	
	default: //This is the default view that is created when no request has been selected
		
		$model = Users::Get();//Gets all fields by default
		$view  = 'list.php';
		break;
}

	switch ($format) {
        case 'min':
                include $view;
                break;
        case 'dialog':
                include '../Shared/_Dialog.php';
                break;
        
        default:
                include '../Shared/_Layout.php';
                
                break;
}
	
	