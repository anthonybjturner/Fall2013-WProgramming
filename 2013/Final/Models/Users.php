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
	
	
	static public function Save($row){
		
		$sql = " Insert Into 2013Fall_Users";
		
	}
	
	static public function Blank(){
		
		
		
	}
	
	static public function Validate($row){

		$errors = array();//Only one error per field
		if( !$row['FirstName'])$errors['FirstName'] = 'is required'; 		
		if( !$row['LastName'])$errors['LastName'] = 'is required';
		if( !is_numeric($row['UserType']))$errors['UserType'] = 'must be a number';
		if( !$row['UserType'])$errors['UserType'] = 'is required';
				
		if(count($errors) == 0){
			return false;
		}else{
			return $errros;
		}
	}
}
