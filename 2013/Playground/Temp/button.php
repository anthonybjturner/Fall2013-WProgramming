<?
	
	@$action  = $_POST['delete_account'];
			
	switch($action){
			
			case 'Delete':
				
				echo('delete'); 
				include 'connect.php';
				break;
			
			case 'new':
				echo('new'); 
				break;
			
			default: echo(''); 
			
	}
?>
		
 