
<?php
	//Controller for the model
	include_once "../../inc/_global.php";

	$model = Suppliers::Get();
	$view = 'list.php';//Gives list of keyowrds to list.php
	include '../Shared/_Layout.php';
