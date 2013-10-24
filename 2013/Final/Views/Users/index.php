<?php

include_once "../../inc/_global.php";

@$action = $_REQUEST['action'];//Merges together the GET and POST
//@$action = $_GET['action']; 


switch ($action) {
	
	case 'details':
		
		$model = Users::Get($_REQUEST['id']);
		$view  = 'details.php';
		break;
		
	case 'new':
		
		$view  = 'edit.php';
		break;
		
	case 'save':
		$errors = Users::Validate($_REQUEST);//Check validation if it is good
		if(!$errors){
			
			$errors = Users::Save($_REQUEST);//Save
		}
		
		//If there are still no errrors then we redirect
		if( !$errors){
			
			header("Location: ?");
			die();//Kills preproccesor processing
			
		}
		
		$model = $_REQUEST;
		$view = 'edit.php';
		break;

	case 'edit':
		
		$model = Users::Get($_REQUEST['id']);
		$view  = 'edit.php';
		break;
		
	case 'delete':
		
		$model = Users::Get($_REQUEST['id']);
		$view  = 'details.php';
		break;
		
	
	
	default:
		
		$model = Users::Get();
		$view  = 'list.php';
		break;
}

		 
	
	include '../Shared/_Layout.php';//Gives list of keyowrds to list.php
	
	