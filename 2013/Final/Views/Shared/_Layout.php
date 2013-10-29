
<!DOCTYPE html>
<html>
  <head>
    <title>Layout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <style type="text/css">
    	body { padding-top: 70px; }
    </style>
  </head>
  
  
  <body>
  	<header>
  	  	<div class="container">

  			<h1> 2013 Fall Web Programming	</h1>
  		</div>
  		
  	</header>
  	
  	   	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	
    	<div class="container">

   			 <div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".nav-c">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Shared</a>
				
			</div>
				
			<div class="collapse navbar-collapse nav-c">
				
				<ul class="nav navbar-nav">
					
					<li class="Users"><a href="../Users/"> Users</a></li>

				
					<li class="dropdown">
		      			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
		      			  <ul class="dropdown-menu">
		          			<li class="Addresses"><a href="../Products/"> Products</a></li>
		          			<li class="Keywords"><a href="../Keywords/"> Keywords</a></li> 
							<li class="Addresses"><a href="../Addresses/"> Addresses</a></li>
							
		        		</ul>
		      		</li>
				</ul>
			</div>
		</div>
	</div> <!-- End navigation area-->

	
  	 <!-- The main view area-->
	<? include $view; ?>
  	<!-- End the main view area-->

  	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="Scripts/main.js"></script>	
    
    <? if(function_exists('Scripts')) 
    	Scripts(); 
    ?>
    
 </body>
</html>