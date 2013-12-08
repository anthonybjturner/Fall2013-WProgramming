<?php
$username = 'admin';
$password = 'admin';

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
	
	
	if( $username == $_SERVER['PHP_AUTH_USER'] && $password == $_SERVER['PHP_AUTH_PW']){
		
		header("Location: ../Users");

		
	}else{
		
		die("Invalid login/password combination");
	}
	
}else{
	header('WWW-Authenticate: Basic realm="Restricted Section"');
	header('HTTP/1.0 401 Unauthorized');
	die("Please enter your username and password");
}
