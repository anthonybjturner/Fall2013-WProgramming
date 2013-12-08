<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
@$type = $_REQUEST['type'];

$errors = null;

switch ($action) {
	
	case 'today-deals':
		
		$view 	= 'today-deals.php';			
		$title	= "todays details";	
		break;
		
	case 'wishlist':
		
		$view 	= 'wishlist.php';			
		$title	= "wishlist";	
		break;
		
	case 'about':
		
		$view 	= 'about.php';			
		$title	= "About";	
		break;
		
	case 'contact':
		
		$model = Users::Blank();
		$view 	= 'contact.php';			
		$title	= "Contact";	
		break;
		
	case 'signin':
		
		$model = Users::Blank();
		
		if( $type == 'admin'){
							
			header("Location: ../Users/index.php");
			die();		
		}else{
			$view 	= 'edit.php';
		}
					
		$title	= "Sign in";	
		break;
		
	case 'shopping-cart':
		
		if( $login != null){
			
			$model = Products::get($_REQUEST['id']);
			
		}else{
			
			$model = Products::get();
		}
		
		$view 	= 'cart.php';
		$title	= "Shopping cart";	
		break;
		
	case 'details':
		$model  = Products::Get($_REQUEST['id']);
		$view 	= 'details.php';
		$title	= "Details for: $model[Name]"	;	
		break;
		
	case 'delete':
						
			//Only triggered when a 'post' is sent
		if(isset($_POST['id'])){
				
			$errors = Products::Delete($_REQUEST['id']);
			if( $errors ){
				//Display the record with error messages
				$model = Products::Get($_REQUEST['id']);
				$view = 'error.php';
				break;
			}
			header("Location: ?");
			die();
		}
		
		//Default call when no 'post' is sent
		$model = Products::Get($_REQUEST['id']);
		$view  = 'delete.php';			
		$title = "Delete: $model[Name]" ;
		break;
		
	case 'save':
		
		//$errors = Users::Validate($_REQUEST);
		$user = $_REQUEST['FirstName'];
		$model  = Users::Get();
		$login = $user;
		
		$view 	= 'list.php';
		$title	= "Welcome back ".$login;	
		break;
		
	case 'send-email':
		
		//$errors = Users::Validate($_REQUEST);
		$view 	= 'list.php';
		$title	= "Sent email";	
		break;
	
	
	default:
		$model  = Users::Get();
		$view 	= 'list.php';
		$title	= 'Amazoff';		
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
		$model_cat=	ProductsCategory::Get();
		include '../Shared/_Layout.php';		
		break;
}
