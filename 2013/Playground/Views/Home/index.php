<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

$errors = null;

switch ($action) {
	
	case 'products':
		$model = Products::GetAllInCategory($_REQUEST['ProductsCategory_id']);
		$title = "Products";
		$view = 'list.php';
		break;
		
	case 'categories':
		$model = Products::GetCategories();
		$title = "Categories";
		$view = 'list.php';
		break;
		
	case 'register':
		
		if(isset($_POST['id'])){
			
			$errors = Users::AddNew($_REQUEST);			
			if(!$errors){
				header("Location: ?");
				die();
			}							
		}
		//$model  = Users::Get($_REQUEST['id']);
		//$view 	= 'delete.php';					
		//$title	= "Edit: $model[FirstName] $model[LastName]"	;	
		//break;
		
		$model = Users::Blank();
		$title= "Register";
		$view = 'edit.php';
	
	break;
		
	case 'signin':
		$model = Users::Blank();
		$title = "Login";
		$view = 'login.php';
		break;
		
	case 'login':
		$errors = Users::Validate($_REQUEST);
		if(!$errors){
			
			$errors = Users::ValidateLogin($_REQUEST);
		}
		
		if( !$errors ){
				
				setcookie('username', $_REQUEST['FirstName'], time() + 60 * 60 * 24 * 7, '/');
				$model = $_REQUEST;
				header("Location: ?");
				die();
				
			
		}else{
			
			echo "User can't login";
			$model = $_REQUEST;
			$view = 'login.php';
			$title	= "Login"	;			
		}		
		break;
	
	default:
		//$model  = Users::Get();
		$view 	= 'home.php';
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
		//$model_cat=	ProductsCategory::Get();
		include '../Shared/_PublicLayout.php';		
		break;
}
