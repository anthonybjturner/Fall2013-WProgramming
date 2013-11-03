<?php
	//Controller for the model
	include_once "../../inc/_global.php";
	
	@$action = $_REQUEST['action'];//Merges together the GET and POST
	@$format = $_REQUEST['format'];//Merges together the GET and POST
	
	switch ($action) {
		
		case 'new':
			$model = Addresses::Blank();//Null Associative array
			$view  = 'edit.php';
			$title = "Create new user";
			break;
		
		case 'detail':
			$model = Addresses::Get($_REQUEST['id']);
			$view = 'details.php';
			$title = "Details for: $model[City] $model[State] ";
			break;
				
		case 'edit':
			
			$model = Addresses::Get($_REQUEST['id']);
			$view  = 'edit.php';
			$title = "Edit: $model[City] $model[State] ";
			break;
			
		case 'delete':
			
			echo(' in delete ');
			
			//Only triggered when a 'post' is sent
			if(isset($_POST['id'])){
				
				$errors = Addresses::Delete($_REQUEST['id']);
				if( $errors ){
				
					//Display the record with error messages
					$model = Addresses::Get($_REQUEST['id']);
					$view = 'error.php';
					break;
					
				}
				
				header("Location: ?");
				die();
			}
			
			//Default call when no 'post' is sent
			$model = Addresses::Get($_REQUEST['id']);
			$view  = 'delete.php';			
			$title = "Delete: $model[FirstName] $model[LastName]" ;
			break;
			
		case 'save':
			
			$errors = Addresses::Validate($_REQUEST);//Check validation if it is good
			if(!$errors){
				//Check for errors when saving
				$errors = Addresses::Save($_REQUEST);//Save
			}
		
			//If there are still no errrors then we redirect
			if( !$errors){
				
				header("Location: ?");
				die();//Kills preproccesor processing
				//End after die	
			}
			//Only get here if there are errors
			$model = $_REQUEST;//Repost previous entered data from post
			$view = 'edit.php';
			$title = "Save: $model[FirstName] $model[LastName]" ;
			break;	
					
		default:
			$model = Addresses::Get();
			$view = 'list.php';//Gives list of keyowrds to list.php
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
	