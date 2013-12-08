<?
	
	@$action  = $_REQUEST['action'];
			
	switch($action){
			
			case 'delete':
				
				echo('delete'); 
				include 'connect.php';
				break;
			
			case 'new':
				echo('new'); 
				header("Location: ?");
				
				break;
			
			default: echo(''); 
			
	}
?>
