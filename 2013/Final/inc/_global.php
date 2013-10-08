<?php
include_once('_password.php');
include_once __DIR__ . '/../Models/Keywords.php';
include_once __DIR__ . '/../Models/Users.php';

function GetConnection(){
	
	global $sql_password;
	
	$conn = new mysqli('localhost', 'turnera1', $sql_password, 'turnera1_db');
	
	return $conn;
}



