<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Demo</title>
    
    <script src="http://code.jquery.com/jquery.js"></script>
    
    <script>
 
    // Your code goes here.

		
		$( document ).ready(function() {
 
		    $( "a" ).click(function( event ) {
		 
		 
		        event.preventDefault();
		 		 $( this ).hide( "slow" );
			    });
 
		});
	 
    </script>

</head>
<body>
    <a href="http://jquery.com/">jQuery</a>

    
</body>
</html>