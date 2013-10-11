<?php

	include_once "../../inc/_global.php";

	$model = Users::Get();
	$view  = 'list.php';
		 
	
	include '../Shared/_Layout.php';//Gives list of keyowrds to list.php
	
	