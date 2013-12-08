<?php

/**
 * 
 */
class Products {
		
	static public function Get($id=null){
			
		if(isset($id)){
			
			return fetch_one("SELECT * FROM Products WHERE id=$id");//Double quotes takes the actual value of $id
		}else{
			return fetch_all('SELECT * FROM Products');
		}
		
		return $ret;	
		
	}
	
		static public function GetByCategory($Categoryid){
			
		
		
		return fetch_all("SELECT * FROM Products WHERE `ProductsCategory_id`=$Categoryid");
				
	}
		
	static public function Delete($id){
		
		$conn = GetConnection();
		$sql = " DELETE FROM Products WHERE id=$id";

		$conn->query($sql);//Insert the values from the associative array $row into the current connections database with the $sql variable
	    $error = $conn->error;    //Returns the last error message (if there's one) for the most recent MySQLi function call that can succeed or fail.
	    $conn->close();
        
        if($error)
	         return array('db_error' => $error);//Create and return an array pointing to the error msg
	        else 
	          return false;
	     
	}
	
	static public function Save($row){
		
		$conn = GetConnection();
		$row2 = Products::Encode($row, $conn);
		
		if($row['id']){//Update field if the returned value for the id is not null
			
			$sql = " UPDATE Products "														//change to 2013Fall_Users_id
			.		"	Set Name='$row2[Name]', Price='$row2[Price]', Description='$row2[Description]', Picture_Url='$row2[Picture_Url]',"
			.		"	Suppliers_id='$row2[Suppliers_id]',	ProductsCategory_id='$row2[ProductsCategory_id]' "
			.		"	WHERE id=$row[id]	";
		}else{
			
			//Insert statement ( a new record )
				$sql = " Insert Into Products (Name, Price, Description, Picture_Url, Suppliers_id,ProductsCategory_id) "
                        .        " Values ('$row2[Name]' ,'$row2[Price]', '$row2[Description]', "
                        .		 " '$row2[Picture_Url]', '$row2[Suppliers_id]', '$row2[ProductsCategory_id]') ";
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
				
		return array('id' => null, 'Name' => null, 'Price' => null, 'Description' => null , 'Picture_Url' => "/~turnera1/2013/Resources/images/placeholder.png",
			 		 'Suppliers_id' => null, 'ProductsCategory_id' => null);
		
	}
	
	static public function Validate($row){

		$errors = array();//Only one error per field
		
		if( !$row['Name'])$errors['Name'] = 'is required'; 	
		if( !$row['Price'])$errors['Price'] = 'is required'; 	
		if( !is_numeric($row['Price']))$errors['Price'] = 'must be a number';	
		if( !$row['Suppliers_id'])$errors['Suppliers_id'] = 'is required';
		if( !is_numeric($row['Suppliers_id']))$errors['Suppliers_id'] = 'must be a number';	
		
		if( !$row['ProductsCategory_id'])$errors['ProductsCategory_id'] = 'id required';
		if( !is_numeric($row['ProductsCategory_id']))$errors['ProductsCategory_id'] = 'must be a number';	
						
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
	