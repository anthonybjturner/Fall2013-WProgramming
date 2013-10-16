<?php

/**
 * 
 */
class Orders{
	
	static public function Get(){
			
		
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM 2013Fall_Orders');
		
		while( $rs = $result->fetch_assoc()){
			
			$ret[] = $rs;//Adding on to the end of collection
		}
	
	
		$conn->close();
		return $ret;	
		
	}
	
}
