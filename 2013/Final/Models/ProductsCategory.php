<?php

/**
 * 
 */
class ProductsCategory {
		
	static public function Get($id=null){
			
		if(isset($id)){
			
			return fetch_one("SELECT * FROM 2013Fall_ProductsCategory WHERE id=$id");//Double quotes takes the actual value of $id
		}else{
			return fetch_all('SELECT * FROM 2013Fall_ProductsCategory');
		}
		
		return $ret;	
	}
	
	static public function Save($row){
		
		$conn = GetConnection();
		$row2 = ProductsCategory::Encode($row, $conn);
		
		if($row['id']){//Update field if the returned value for the id is not null
			
			$sql = " UPDATE 2013Fall_ProductsCategory "
			.		"	Set Name='$row2[Name]' "
			.		"	WHERE id=$row[id]	";
		}else{
			
			//Insert statement ( a new record )
				$sql = " Insert Into 2013Fall_ProductsCategory (Name) "
                        .        " Values ('$row2[Name]') ";
		}
						
        $conn->query($sql);//Insert the values from the associative array $row into the current connections database with the $sql variable
        $error = $conn->error;    //Returns the last error message (if there's one) for the most recent MySQLi function call that can succeed or fail.
                   
        $conn->close();
        
        if($error){
                return array('db_error' => $error);//Create and return an array pointing to the error msg
        }else {
                return false;
        }	
	}

	static public function Delete($row){
		
		$conn = GetConnection();
		$answer = $row['confirm'];

		if(isset($answer) && $answer == 'Yes' ){//Update field if the returned value for the id is not null
			
			$sql = " Delete From 2013Fall_ProductsCategory "
			.	   "	WHERE id=$row[id]	";
			
			$conn->query($sql);//Insert the values from the associative array $row into the current connections database with the $sql variable
	        $error = $conn->error;    //Returns the last error message (if there's one) for the most recent MySQLi function call that can succeed or fail.
	                   
	        $conn->close();
        
	        if($error){
	                return array('db_error' => $error);//Create and return an array pointing to the error msg
	        }else {
	                return false;
	        }	
		}
		
	}
	
	static public function Blank(){
				
		return array('id' => null, 'Name' => null);
		
	}
	
	static public function Validate($row){

		$errors = array();//Only one error per field
		if( !$row['Name'])$errors['Name'] = 'is required'; 	
		
		return count($errors) ? $errors : null;
	}
	
	//Encodes value of every single item in the list
	static function Encode($row, $conn){
		
		$row2 = array();
		foreach ($row as $key => $value) {
			
			$row2[$key] = $conn->real_escape_string($value);
		}
		
		return $row2;
		
	}
	
}
	