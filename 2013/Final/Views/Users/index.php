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
			
			if($format == 'plain'){//Used for AJAX call
				
				$view = 'item.php';
				$rs = Users::Get($_REQUEST['id']);
				
			}else{
				
				//If the format is not plain, and is dialog or layout or nothing do this redirect
				 header("Location: ?status=Saved&id=$_REQUEST[id]");
				die();//Kills preproccesor processing
				//End after die	
			}
			
           
		}else{
			
			//Only get here if there are errors
			$model = $_REQUEST;
			$view = 'edit.php';
			$title = "Edit: $model[FirstName] $model[LastName]" ;
		}
	
		
		break;

	case 'edit':

		$model = Users::Get($_REQUEST['id']);
		$view  = 'edit.php';
		$title = "Edit: $model[FirstName] $model[LastName]" ;
		
		break;
		
	case 'delete':
		
		if(isset($_POST['id'])){
			
			//Check for errors when deleting
			$errors = Users::Delete($_REQUEST['id']);
			//If there are still no errrors then we redirect
			if( $errors){
				
				$model = Users::Get($_REQUEST['id']);
				
				$view = 'error.php';
				break;	
			}
				
			
			header("Location: ?");
				die();//Kills preproccesor processing
				//End after die	
			//echo('there are errors '.$errors['db_error']);
		}
			
		$model = Users::Get($_REQUEST['id']);
		$view  = 'delete.php';
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
		
	case 'plain':
		include $view;
		break; 
		
	default: 
		include '../Shared/_Layout.php';
		break;

}
	