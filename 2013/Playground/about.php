<?
	
	$location = 'about';
?>
	


<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <style type="text/css">
    	body { padding-top: 70px; }
    </style>
  </head>
  
  
  <body>
  	<? include('_nav.php'); ?>
  	
  	   	
			
			<!-- main area -->
			
			<div class="container">
					<div class="well">

						<h1>About Me </h1>
						<p> About this author <a class="btn btn-default "> More info </a></p>
							
					</div>
					
			</div>

	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="Scripts/main.js">
		
		
	</script>
	
	<!-- update/highlight based on javascript -->
	<script type="text/javascript">
    	$(function (){
		  
		  $(".nav .about").addClass("active").fadeOut().fadeIn().fadeOut().fadeIn();
		});
    		
    </script>


	</body>
</html>
