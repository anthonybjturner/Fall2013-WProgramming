
<?php
	//Controller for the model
	include_once "../../inc/_global.php";

	@$action = $_REQUEST['action'];//Merges together the GET and POST
	@$format = $_REQUEST['format'];//Merges together the GET and POST
	
	switch ($action) {
		
		case 'detail':
			$model = OrdersItems::Get($_REQUEST['id']);
			$view = 'details.php';
			$title = "Details: $model[Name] $model[Orders_id]";
			break;
			
		case 'new':
			$model = OrdersItems::Blank();//Null Associative array
			$view  = 'edit.php';
			$title = "Create new Order";
			break;
			
		case 'edit':
			
			$model = OrdersItems::Get($_REQUEST['id']);
			$view  = 'edit.php';
			$title = "Edit: $model[Name] $model[Orders_id]";
			
		break;
			
			
		case 'save':
			
			$errors = OrdersItems::Validate($_REQUEST);//Check validation if it is good
			if(!$errors){
				//Check for errors when saving
				$errors = OrdersItems::Save($_REQUEST);//Save
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
			$title = "Edit: $model[Name] $model[Orders_id]";
			
			break;	
			
		case 'delete':
			
			if(isset($_POST['id'])){
				
				$errors = OrdersItems::Delete($_REQUEST['id']);
				
				if($errors){
					
					$model = OrdersItems::Get($_REQUEST['id']);
					$view = 'errors.php';
					break;
				}
				
				header("Location: ?");
				die();
				
			}
			

			$model = OrdersItems::Get($_REQUEST['id']);
			$view = 'delete.php';
			$title = "Delete: $model[Name] $model[Orders_id]";
			break;
			
					
		default:
			$model = OrdersItems::Get();
			$view = 'list.php';//Gives list of keyowrds to list.php
	
	}

		switch ($format) {
			case 'dialog':
				include '../Shared/_DialogLayout.php';
				break;
			
			default:
				include '../Shared/_Layout.php';
				break;
		}
	