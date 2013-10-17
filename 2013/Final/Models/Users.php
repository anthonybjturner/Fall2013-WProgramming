<?php

/**
 * 
 */
class Users {
	
	static public function Get($id=null){
			
		if(isset($id)){
			
			return fetch_one("SELECT * FROM 2013Fall_Users WHERE id=$id");//Double quotes takes the actual value of $id
		}else{
			return fetch_all('SELECT * FROM 2013Fall_Users');
		}

	}
	
}
