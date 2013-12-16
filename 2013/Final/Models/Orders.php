<?php

/**
 * 
 */
class Orders{
		
	static public function Get($id=null){
			
		if(isset($id)){
			
				$sql = "        SELECT Uid.*, U.LastName as User_id_Name
		                        FROM Orders Uid
		                        Join Users U ON Uid.`User_id`=U.id
		                        WHERE Uid.id=$id
		                                        ";
		                        $name = fetch_one($sql);
				$sql = "        SELECT Uid.*, U.FirstName as User_id_Name
		                        FROM Orders Uid
		                        Join Users U ON Uid.`User_id`=U.id
		                        WHERE Uid.id=$id";
								$last = fetch_one($sql);				
								
								return $name.$last;                        
				
			
			//return fetch_one("SELECT * FROM Orders WHERE id=$id");//Double quotes takes the actual value of $id
		}else{
		
	            $sql = "        SELECT Uid.*, U.LastName as User_id_Name
	            FROM Orders Uid
	            Join Users U ON Uid.`User_id`=U.id
	            
	             ";
	         return fetch_all($sql); 
	   
			///	return fetch_all('SELECT * FROM Orders');
		}
		
	}
	
	
		
	static public function GetByUserId($id){
			
		
        $sql = "        SELECT id FROM Orders WHERE User_id=$id";
        return fetch_one($sql);  	
		
	}
	
	static public function Save($row){
		
		$conn = GetConnection();
		$row2 = Orders::Encode($row, $conn);
		
		if($row['id']){//Update field if the returned value for the id is not null
			
			$sql = " UPDATE Orders Set User_id='$row2[User_id], Addresses_id='$row2[Addresses_id]' WHERE id=$row[id]";
		}else{
			
			//Insert statement ( a new record )
				$sql = " Insert Into Orders (User_id, Addresses_id) "
                        .        " Values ('$row2[User_id]','$row2[Addresses_id]') ";
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
	
	
	static public function Blank(){
				
		return array('id' => null, 'User_id' => null, 'Addresses_id' => null);
		
	}
	
	static public function Validate($row){

		$errors = array();//Only one error per field
		if( !$row['User_id'])$errors['User_id'] = 'is required'; 	
		if( !is_numeric($row['User_id']))$errors['User_id'] = 'must be a number';	
		if( !$row['Addresses_id'])$errors['Addresses_id'] = 'is required'; 	
		if( !is_numeric($row['Addresses_id']))$errors['Addresses_id'] = 'must be a number';	
		
		
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
	
