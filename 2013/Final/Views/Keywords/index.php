
<?php
	//Controller for the model
	include_once "../../inc/_global.php";

	@$action = $_REQUEST['action'];//Merges together the GET and POST
	
	switch ($action) {
		
		case 'detail':
			$model = Keywords::Get($_REQUEST['id']);
			$view = 'details.php';
			break;
			
		case 'new':
			$model = Keywords::Blank();//Null Associative array
			$view  = 'edit.php';
			break;
			
		case 'edit':
			
			$model = Keywords::Get($_REQUEST['id']);
			$view  = 'edit.php';
		break;
			
			
		case 'save':
			
			$errors = Keywords::Validate($_REQUEST);//Check validation if it is good
			if(!$errors){
				//Check for errors when saving
				$errors = Keywords::Save($_REQUEST);//Save
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
					
		default:
			$model = Keywords::Get();
			$view = 'list.php';//Gives list of keyowrds to list.php
			break;
	}

		include '../Shared/_Layout.php';
	