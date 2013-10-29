<?php

/**
 * 
 */
class Products {
		
	static public function Get($id=null){
			
		if(isset($id)){
			
			return fetch_one("SELECT * FROM 2013Fall_Products WHERE id=$id");//Double quotes takes the actual value of $id
		}else{
			return fetch_all('SELECT * FROM 2013Fall_Products');
		}
		
		return $ret;	
		
	}
	
	
	static public function Save($row){
		
		$conn = GetConnection();
		$row2 = Products::Encode($row, $conn);
		
		if($row['id']){//Update field if the returned value for the id is not null
			
			$sql = " UPDATE 2013Fall_Products "														//change to 2013Fall_Users_id
			.		"	Set Price='$row2[Price]', Quantity='$row2[Quantity]', Suppliers_id1='$row2[Suppliers_id1]',	OrdersItems_id1='$row2[OrdersItems_id1]' "
			.		"	WHERE id=$row[id]	";
		}else{
			
			//Insert statement ( a new record )
				$sql = " Insert Into 2013Fall_Products (Price, Quantity, Suppliers_id1, OrdersItems_id1) "
                        .        " Values ('$row2[Price]', '$row2[Quantity]', '$row2[Suppliers_id1]', '$row2[OrdersItems_id1]') ";
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
				
		return array('Price' => null, 'Quantity' => null , 'Suppliers_id1' => null, 'OrdersItems_id1' => null);
		
	}
	
	static public function Validate($row){

		$errors = array();//Only one error per field
		if( !$row['Price'])$errors['Price'] = 'is required'; 	
		if( !is_numeric($row['Price']))$errors['Price'] = 'must be a number';	
		
		if( !$row['Quantity'])$errors['Quantity'] = 'is required';
		if( !is_numeric($row['Quantity']))$errors['Quantity'] = 'must be a number';
	
		if( !$row['Suppliers_id1'])$errors['Suppliers_id1'] = 'is required';
		if( !$row['OrdersItems_id1'])$errors['OrdersItems_id1'] = 'id required';
						
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
	