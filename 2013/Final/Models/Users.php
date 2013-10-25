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
		
		$sql = " Insert Into 2013Fall_Users (FirstName, LastName, Password, UserType) "
                        .        " Values ('$row[FirstName]', '$row[LastName]', '$row[Password]', '$row[UserType]') ";
						
		$conn = GetConnection();
        $conn->query($sql);//Insert the values from the associative array $row into the current connections database with the $sql variable
        $error = $conn->error;    //Returns the last error message (if there's one) for the most recent MySQLi function call that can succeed or fail.
                   
        $conn->close();
        
        if($error){
                return array('db_error' => $error);//Create and return an array pointing to the error msg
        }else {
                return false;
        }	
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
			return $errors;
		}
	}
}
