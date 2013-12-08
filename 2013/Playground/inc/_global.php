<?php
include_once('_password.php');
include_once('_login.php');
include_once __DIR__ . '/../Models/Keywords.php';
include_once __DIR__ . '/../Models/Users.php';
include_once __DIR__ . '/../Models/Addresses.php';
include_once __DIR__ . '/../Models/ProductKeywords.php';
include_once __DIR__ . '/../Models/Products.php';
include_once __DIR__ . '/../Models/ProductsCategory.php';
include_once __DIR__ . '/../Models/ContactMethods.php';
include_once __DIR__ . '/../Models/OrdersItems.php';
include_once __DIR__ . '/../Models/Orders.php';
include_once __DIR__ . '/../Models/PhoneNumbers.php';
include_once __DIR__ . '/../Models/Suppliers.php';
include_once __DIR__ . '/../Models/FrontEnd.php';



function GetConnection(){
	
	global $sql_password;
	
	$conn = new mysqli('localhost', 'turnera1', $sql_password, 'turnera1_db');
	
	return $conn;
}

function fetch_all($sql){
		
	
	$ret = array();
	$conn = GetConnection();
	$result = $conn->query($sql);//Send a query with the given $sql statement/arguments
	
	echo $conn->error;
	
	while( $rs = $result->fetch_assoc()){
		
		$ret[] = $rs;//Adding on to the end of collection
	}
	

	$conn->close();
	return $ret;	
	
}


function fetch_one($sql){
		
	$arr = fetch_all($sql);//Fetch all columns and then return only the first
	print_r($arr[0]);
	return $arr[0];//Return the first

}


