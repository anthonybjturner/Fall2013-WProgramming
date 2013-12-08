<?php
include_once '../../inc/_global.php';
session_start();

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

$errors = null;

switch ($action) {
	
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
			
		}else
			$model  = $_SESSION['cart'];
		
		$title = "Cart items";
		$view = 'home.php';
		break;
	
	default:
	
		if( !isset($_SESSION['cart']) ){
			
			$_SESSION['cart'] = array();	
		}
		$view 	= 'home.php';
		$title	= 'Front End';		
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
