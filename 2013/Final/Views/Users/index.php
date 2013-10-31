<?php

include_once "../../inc/_global.php";

@$action = $_REQUEST['action'];//Merges together the GET and POST
@$format = $_REQUEST['format'];//Merges together the GET and POST

switch ($action) {
	
	case 'details':
		
		$model = Users::Get($_REQUEST['id']);
		$view  = 'details.php';
		$title = "Details for: $model[FirstName] $model[LastName]" ;
		break;
		
	case 'new':
		$model = Users::Blank();//Null Associative array
		$view  = 'edit.php';
		$title = "Create New User" ;
		
		break;
		
	case 'save':
		
		$errors = Users::Validate($_REQUEST);//Check validation if it is good
		if(!$errors){
			//Check for errors when saving
			$errors = Users::Save($_REQUEST);//Save
		}
		
		//If there are still no errrors then we redirect
		if( !$errors){
			
			header("Location: ?");
			die();//Kills preproccesor processing
			//End after die	
		}
		//Only get here if there are errors
		$model = $_REQUEST;
		$view = 'edit.php';
		$title = "Edit: $model[FirstName] $model[LastName]" ;
		
		break;

	case 'edit':

		$model = Users::Get($_REQUEST['id']);
		$view  = 'edit.php';
		$title = "Edit: $model[FirstName] $model[LastName]" ;
		
		break;
		
	case 'delete':
		
		if(isset($_POST['id'])){
			
				//Check for errors when saving
			$errors = Users::Delete($_REQUEST['id']);//Save
			//If there are still no errrors then we redirect
			if( !$errors){
				
				header("Location: ?");
				die();//Kills preproccesor processing
				//End after die	
			}	
		}
			
		$model = Users::Get($_REQUEST['id']);
		$view  = 'details.php';
		$title = "Edit: $model[FirstName] $model[LastName]" ;
		break;
	
	default: //This is the default view that is created when no request has been selected
		
		$model = Users::Get();//Gets all fields by default
		$view  = 'list.php';
		$title = 'Users';
		break;
}


switch($format){
	
	case 'dialog':
		include '../Shared/_DialogLayout.php';
		break;
		
	default: 
		include '../Shared/_Layout.php';
		break;
	
	
}
	