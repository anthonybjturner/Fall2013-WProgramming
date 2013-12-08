<?

class Login{
	
	static public function GetConnection($server, $db_login, $db_password, $db_name){

			$conn = new mysqli($server, $db_login, $db_password, $db_name);
		
			return $conn;
	}
	
	static public function ConnectUser($user_name, $password){
				
			//Ensure the values passed are not empty
			if( isset($user_name) && isset($password)){
					
				//Connect to the database with the database name, database login name, database password, and database		
				$conn = Login::GetConnection('localhost', 'turnera1', 's627398', 'turnera1_db');
				
				if($conn->connect_errno > 0){
	 			   die('Unable to connect to database [' . $conn->connect_error . ']');
				}
								
				$ret = array();//Holds an array of queried values
				
				//Return the a user name and password from the specified table if the passed in values, 
				//user_name and password match the tables' username and password for a user
				$sql = "SELECT UserName, Password FROM Table WHERE UserName='$user_name' AND Password='$password' ";
				$result = $conn->query($sql);//Send a query with the given $sql statement/arguments
				
				$error =  $conn->error;//Display any errors	
				$conn->close();//Close the connection, it is not needed any more
				
				if($error){
		            	
		            echo('db_error'.$error);//Create and return an array pointing to the error msg
		            
		        }else {//If no errors then check for matching user name and password
		        	
					if ($result->num_rows == 1){//Ensure one entry was found only
							
							$rs = $result->fetch_assoc();
							$name = $rs['UserName'];
							$pass = $rs['Password'];
							//Unsalting and hashing done here for password
							
							if($name == $user_name && $password == $pass ){
								
								//This is where the user is allowed to be logged in
							}else{
								
								echo('Incorrect username or password');							
							}
							
					}else{
						
						echo('More than one value found for the user');//Create and return an array pointing to the error msg
					}
		        }	
			}else{
				
				echo('User name or password is not set');
			}
	}

	static public function ConnectAndDelete($user_name){
				
			//Ensure the user name is not empty	
			if( isset($user_name)){
						
				//Connect to the database with the database name, database login name, database password, and database		
				$conn = Login::GetConnection('localhost', 'turnera1', 's627398', 'turnera1_db');
				
				if($conn->connect_errno > 0){
	 			   die('Unable to connect to database [' . $conn->connect_error . ']');
				}
								
				$ret = array();//Holds an array of queried values
				
				//Try deleting the specified user from the specified table
				$sql = "Delete FROM Users WHERE FirstName='$user_name' ";
				$result = $conn->query($sql);//Send a query with the given $sql statement/arguments
				$error = $conn->error;	//
				$conn->close();//Close the connection, it is not needed anymore
        
		        if($error){
		            echo('db_error '.$error);//Create and return an array pointing to the error msg
		        }else {
		            echo('User deleted '.$user_name);//Create and return an array pointing to the error msg

		        }	

			}else{
				
				echo('User name cant be empty');
			}
	}
}
