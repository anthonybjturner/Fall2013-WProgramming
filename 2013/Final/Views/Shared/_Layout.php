<!DOCTYPE html>
<html>
  <head>
    <title>Amazoff <?=@$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <style type="text/css">
    	body { padding-top: 70px; }
    	
    	#main-content{
    		
    	
    	}
    	

    	#promotions{
    		
    		border: #C0C0C0 1px solid;
    		margin-left: auto;
    		margin-right: auto ;
    		
    	}
    	
   
    	
    	.container img {
    		
    		max-height:	100%; 
    		max-width:	100%;
    	}
    	
    </style>
  </head>
  <body>
 	
  	
  	<? 	include('_nav.php'); ?>
  	<div class="container">
	
	  	 <!-- The main view area-->
	  	 <div class="col-md-10">
			<? include $view; ?>
		</div> 
	  	<!-- End the main view area-->
	  	 <div class="col-md-2">
			<? include 'promotions.php'; ?>
		</div> 

	</div>
	 <? include('_footer.php'); ?>

	
  	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="../../Resources/Scripts/main.js"></script>	
    
    <? if(function_exists('Scripts')) 
    	Scripts(); 
    ?>
    
 </body>
</html>