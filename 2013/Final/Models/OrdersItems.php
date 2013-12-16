<?php

/**
 * 
 */
class OrdersItems {
	
	static public function Get($id=null){
			
		if(isset($id)){
			
				       
				$sql = "		select OIt.*, U.LastName as Orders_Name
								from OrdersItems OIt
								inner join Orders ord on OIt.Orders_id = ord.id
								inner join Users U on ord.User_id  = U.id 
								order by OIt.Orders_id
								WHERE OIt.id=$id";
								return fetch_one($sql); 

		}else{
		
	            $sql = "		select OIt.*, U.LastName as Orders_Name
								from OrdersItems OIt
								inner join Orders ord on OIt.Orders_id = ord.id
								inner join Users U on ord.User_id  = U.id 
								order by OIt.Orders_id";
								
								return fetch_All($sql); 
		}	
	}
	
	
	static public function Save($row){
		
		$conn = GetConnection();
		$row2 = Orders::Encode($row, $conn);
		
		if($row['id']){//Update field if the returned value for the id is not null
			
			$sql = " UPDATE OrdersItems Set Name='$row2[Name], Orders_id='$row2[Orders_id]'"
			.		"Products_id='$row2[Products_id]' WHERE id=$row[id]";
		}else{
			
			//Insert statement ( a new record )
				$sql = " Insert Into OrdersItems (Name, Orders_id, Products_id) "
                        .        " Values ('$row2[Name]','$row2[Orders_id]', '$row2[Products_id]') ";
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
				
		return array('id' => null, 'Name' => null, 'Orders_id' => null, 'Products_id' => null);
		
	}
	
	static public function Validate($row){

		$errors = array();//Only one error per field
		if( !$row['Name'])$errors['Name'] = 'is required'; 	
		if( !$row['Orders_id'])$errors['Orders_id'] = 'is required'; 	
		if( !is_numeric($row['Orders_id']))$errors['Orders_id'] = 'must be a number';
		if( !$row['Products_id'])$errors['Products_id'] = 'is required'; 	
		if( !is_numeric($row['Products_id']))$errors['Products_id'] = 'must be a number';	
		
		
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
