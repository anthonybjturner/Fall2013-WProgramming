<!DOCTYPE html>
<html>
  <head>
    <title><?=@$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <style type="text/css">
    	
    </style>
  </head>
  <body>

    	<div class="container">

		  	 <div class="navbar navbar-default" role="navigation">
	   			 <div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".nav-c">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/~turnera1/2013/Final/Views/Home">Amazoff</a>
					
				</div>
				
			<div class="collapse navbar-collapse nav-c">
				
				<ul class="nav navbar-nav">

					<li class="dropdown">
		      			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Departments <b class="caret"></b></a>
		      			  <ul class="dropdown-menu">
		      			  	
									
							<li>
								<a href="#"> Categories</a>
							</li>
			
		        		</ul>
		      		</li>
		      		

		      		<li class="dropdown">
		      			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wishlist <b class="caret"></b></a>
		      			  <ul class="dropdown-menu">
		      			  	
									
							<li>
								<a href="#"> Categories</a>
							</li>
			
		        		</ul>
		      		</li>
		      		
		      		<li class="dropdown">
		      			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Account <b class="caret"></b></a>
		      			  <ul class="dropdown-menu">
		      			  	
									
							<li>
								<a href="#"> Categories</a>
							</li>
			
		        		</ul>
		      		</li>
				</ul>
				
				
				
				<p class="navbar-text pull-right"> <a href="?action=signin" class="navbar-link">

						Signed in as Anthony 
					</a>
				</p>
				
				<p class="navbar-text pull-right" id="shopping-cart">
                      <a href="#" class="navbar-link">Cart</a>
                 </p>				
			</div>
		</div>
	</div>
	
	  	 <!-- The main view area-->

			<? include $view; ?>

	  	<!-- End the main view area-->

  	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <!-- <script src="../../Resources/Scripts/main.js"></script> -->	
    
   <? if(function_exists('Scripts')) 
    	Scripts(); 
    ?>
    
 </body>
</html>