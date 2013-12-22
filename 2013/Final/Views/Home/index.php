<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

$errors = null;

switch ($action) {
	
	
	case 'terms':
		
		$text = $_GET['term'];
		$model = Products::GetLike($text);
		$view 	= 'search.php';
	break;
	
	case 'search':

		$model = Products::GetMatches($_POST['data']);
		$view = 'list-search.php';
		$title = "search";
		break;
	
	
	case 'register':
		
		$model = Users::Blank();
		$view = 'register.php';
		$title = "Register";
		break;
		
	case  'submit-register':
		
		
		$errors = Users::Validate($_REQUEST);
		if(!$errors){
			$errors = Users::Save($_REQUEST);			
		}
		if(!$errors){
			
			$view = 'home.php';
			$title = 'home';
			
		}else{
			$model = $_REQUEST;
			$view = 'register.php';
			$title	= "Register: $model[FirstName] $model[LastName]"	;			
		}		
		break;

	
	case 'products':
		$model = Products::GetByCategory($_REQUEST['ProductsCategory_id']);
		$title = "Products";
		$view = 'list.php';
		break;
		
	case 'categories':
		$model = ProductsCategory::Get();
		$title = "Categories";
		$view = 'list.php';
		break;
		
	case 'addToCart':
		
		if( !isset($_SESSION['cart']) ){
			
			$_SESSION['cart'] = array();	
		}
		
		$cart  = $_SESSION['cart'];
		$cart[] = $_REQUEST['id'];
		$_SESSION['cart'] = $cart;
		header('Location: ?');
		die();
		break;
		
	case 'showCart':
			
		if( !isset($_SESSION['cart']) ){
			
			$model = Products::Blank();
			
		}else{
				
			$model  = $_SESSION['cart'];
			//Populate the model with items from each id
			foreach ($model as $key => $id) {
			
				$item = Products::Get($id);
				$model[$key] = $item;
			} 
		}
		
		$title = "Cart items";
		$view = 'list.php';
		break;

	case 'saveShippingInfo':
		
		$errors = Home::Validate($_REQUEST);
		if(!$errors){
			//Create the user if he does not exist			
			if( !isset($_SESSION['user_info']) ){
			
				$_SESSION['user_info'] = array();
					
			}
			
			$user_info  = $_SESSION['user_info'];
			$user_info[] = $_REQUEST['id'];
			foreach ($_REQUEST as $key => $value) {
				
				if(isset($value) && $value != '')
					$user_info[$key] = $value; 
			}
			$_SESSION['user_info'] = $user_info;
			
			$model = Home::CheckoutBlank();
			$view = 'checkout.php';
	
			//$errors = Home::Save($_REQUEST);			
		}else{
			$view = 'edit.php';
			$model = $_REQUEST;
		}
		break;
		
	case 'saveCreditInfo':
	
		$errors = Home::ValidateCreditInfo($_REQUEST);
		if(!$errors){
				
			$errors = Home::Save($_SESSION['user_info']);
		}
		
		if(!$errors){
			
			$model = $_SESSION['cart'];
			foreach ($model as $key => $id) {
			
				$item = Products::Get($id);
				$model[$key] = $item;
			} 
		
			$title = "Order Summary";	
			$view = 'summary.php';
			Home::EmptyCart();	
			
		}else{
			$title= "Checkout";
			$model = $_REQUEST;
			$view = 'checkout.php';
			
		}
		break;
		
	case 'delete':
		
		if(isset($_REQUEST['id'])){

			$cart  = $_SESSION['cart'];
			foreach ($cart as $key => $id) {
				
				if( $id == $_REQUEST['id']){
					 unset($_SESSION['cart'][$key]);
					break;
				}
			} 
		}
		
		$model  = $_SESSION['cart'];
		//Populate the model with items from each id
		foreach ($model as $key => $id) {
			
				$item = Products::Get($id);
				$model[$key] = $item;
		} 
		
		$view 	= 'list.php';					
		$title	= "Cart"	;			
		break;
		
	case 'checkOut':
		
		$model = Home::Blank();
		$view = 'edit.php';
		$title = "Check out";
		break;
	case 'login':
		
		header('Location: ../Auth/index.php?action=login');
		die();
		//$view = 'home.php';
		
		break;
	
	default:
	
		if( !isset($_SESSION['cart']) ){
			
			$_SESSION['cart'] = array();	
		}
		$view 	= 'home.php';
		$title	= 'My Website';		
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
