<?php

/**
 * 
 */
class Suppliers {
	
	static public function Get(){
			
		
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM 2013Fall_Suppliers');
		
		while( $rs = $result->fetch_assoc()){
			
			$ret[] = $rs;//Adding on to the end of collection
		}
	
	
		$conn->close();
		return $ret;	
		
	}
	
}
