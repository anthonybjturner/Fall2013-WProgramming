<?php

/**
 * 
 */
class Orders{
		
	static public function Get($id=null){
			
		if(isset($id)){
			
			return fetch_one("SELECT * FROM 2013Fall_Orders WHERE id=$id");//Double quotes takes the actual value of $id
		}else{
			return fetch_all('SELECT * FROM 2013Fall_Orders');
		}
		
		return $ret;	
		
	}
	
	
	static public function Save($row){
		
		$conn = GetConnection();
		$row2 = Orders::Encode($row, $conn);
		
		if($row['id']){//Update field if the returned value for the id is not null
			
			$sql = " UPDATE 2013Fall_Orders Set OrdersItems_id='$row2[OrdersItems_id], Addresses_id='$row2[Addresses_id]' WHERE id=$row[id]";
		}else{
			
			//Insert statement ( a new record )
				$sql = " Insert Into 2013Fall_Orders (OrdersItems_id, Addresses_id) "
                        .        " Values ('$row2[OrdersItems_id]','$row2[Addresses_id]') ";
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
				
		return array('id' => null, 'OrdersItems_id' => null, 'Addresses_id' => null);
		
	}
	
	static public function Validate($row){

		$errors = array();//Only one error per field
		if( !$row['OrdersItems_id'])$errors['OrdersItems_id'] = 'is required'; 	
		if( !is_numeric($row['OrdersItems_id']))$errors['OrdersItems_id'] = 'must be a number';	
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
	
