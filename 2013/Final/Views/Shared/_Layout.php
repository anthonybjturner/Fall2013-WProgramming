<!DOCTYPE html>
<html>
  <head>
    <title><?=@$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <style type="text/css">
    	body { padding-top: 70px; }
    	
    </style>
  </head>
  <body>

  	<? 	include('_nav.php'); ?>
  	<div class="container">
	
	  	 <!-- The main view area-->
	  	 <div>
			<? include $view; ?>
		</div> 
	  	<!-- End the main view area-->

	</div>
	 <? include('_footer.php'); ?>

  	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <!-- <script src="../../Resources/Scripts/main.js"></script> -->	
    
   <? if(function_exists('Scripts')) 
    	Scripts(); 
    ?>
    
 </body>
</html>