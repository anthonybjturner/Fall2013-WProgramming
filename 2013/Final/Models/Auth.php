<?
	const ADMIN = 3;
	
class Auth{
	
    public static function IsLoggedIn(){
    	
            return self::GetUser() != null;
    }
	
    public static function GetUser(){
    	
		if( isset($_SESSION['User']) )
            return $_SESSION['User'];
		
		else {
			return "";
		}
    }
	
    public static function HasPermission(){
    	
            $user = self::GetUser();
			if(isset($user))
				return $user['UserType'] == ADMIN;
			return false;
    }
    
    public static function LogIn($userName, $password){
    	
            $sql = "        SELECT U.*
                                    FROM Users U
                                    WHERE U.LastName='$userName'
                            ";
							
            $user = fetch_one($sql);
			
            if($user['Password'] == Users::Encrypt($password) ){
                    $_SESSION['User'] = $user;
				return true;
            }             
			else {
				return false;
			}         
    }
		
	static public function Blank(){
				
		return array('id'=> null, 'Parents_id'=> null,'Name' => null);
		
	}
    
    static public function Secure(){
    	
            if(!self::IsLoggedIn() || !Auth::HasPermission()){
               header('Location: ' . "/~turnera1/2013/Final/Views/Auth?action=login"); die();
            }		
    }
	
	static public function LogOut(){
			
		$_SESSION=array();
		if (session_id() != "" || isset($_COOKIE[session_name()]))
			setcookie(session_name(), '', time()-2592000, '/');
		session_destroy();
		
		return true;
	}
}