
<?php
	//Controller for the model
	include_once "../../inc/_global.php";

	@$action = $_REQUEST['action'];//Merges together the GET and POST
	
	switch ($action) {
		
		case 'detail':
			$model = ProductsCategory::Get($_REQUEST['id']);
			$view = 'details.php';
			break;
			
		case 'new':
			$model = ProductsCategory::Blank();//Null Associative array
			$view  = 'edit.php';
			break;
			
		case 'edit':
			
			$model = ProductsCategory::Get($_REQUEST['id']);
			$view  = 'edit.php';
		break;
			
			
		case 'save':
			
			$errors = ProductsCategory::Validate($_REQUEST);//Check validation if it is good
			if(!$errors){
				//Check for errors when saving
				$errors = ProductsCategory::Save($_REQUEST);//Save
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
			break;	
			
		case 'delete':
			$model = ProductsCategory::Get($_REQUEST['id']);
			$view = 'delete.php';
			
			break;
			
		case 'confirm_delete':
			
			ProductsCategory::Delete($_REQUEST);	
			header("Location: ?");
			die();//Kills preproccesor processing
					
		default:
			$model = ProductsCategory::Get();
			$view = 'list.php';//Gives list of keyowrds to list.php
	
	}

		include '../Shared/_Layout.php';
	