
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <style type="text/css">
    	body { padding-top: 70px; }
    </style>
  </head>
  
  
  <body>
  	   	
  	   	
  	   	<!-- Navigation bar ~ using a fixed navbar that keeps showing when scrolling down and up-->
  	   		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" >

  	   			<div class="container">
   					<div class="navbar-header">
						
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".nav-c">
			    			<span class="icon-bar"></span>
			        		<span class="icon-bar"></span>
			        		<span class="icon-bar"></span>
			    		</button>
		      	
		      			<a class="navbar-brand" href="#">Playground</a>
					</div><!-- End of navbar-header-->
		
		
					<div class="collapse navbar-collapse nav-c">
			            <ul class="nav navbar-nav">
			            	<!-- Simple static links -->
			              <li class="home active"><a href="index.php">Home</a></li>
			              <li class="contact "><a href="contact.php">Contact</a></li>
			              <li class="links "><a href="links.php">Links</a></li>
							
							<!-- dropdown list area -->
						  <li class="dropdown">
						        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						        <ul class="dropdown-menu">
						          <li><a href="#">Action</a></li>
						          <li><a href="#">Another action</a></li>
						          <li><a href="#">Something else here</a></li>
						          <li><a href="#">Separated link</a></li>
						          <li><a href="#">One more separated link</a></li>
						        </ul>
						   </li>
		      			</ul>
		      			
						<p class="navbar-text pull-right">Signed in as <a href="#" class="navbar-link">Anthony Turner</a></p>
					</div><!-- End of collapse navbar-->
				</div><!-- End of container -->
			</div><!-- End of navbar-->
			
			<!-- main area -->
		  	<div class="container">
		 		 	
			  	
	  				<div class="jumbotron">
			    		<h1>SUNY New Paltz University <br>Web Server Programming</h1>
			    
				    	<p>Welcome to the Bootstrap 101 basic template project</p>
	  					<a class="btn btn-lg btn-success">Learn More</a>
	  				</div>
	  		
	  				<div class="row">
	  					
	  					<div class="col-sm-6 col-md-4">
				  			<h2>Heading</h2>
		          			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		          			<p><a class="btn btn-primary" href="#">View details »</a></p>
						</div>
	   				
	   					<div class="col-sm-6 col-md-4">
		          
		          			<h2>Important Points</h2>
		          			<ul>
		          				<li>The three main links in the navbar work</li>
		          				<li>They are all centralized in one file</li>
		          				<li>They change apearance to show you which page you are on.</li>
		          				<li>These colunms start as three columns then reduce as the browser shrinks</li>
				  			</ul>
		          			<p><a class="btn btn-primary" href="#">View details »</a></p>
						</div>
				
	 					<div class="col-sm-6 col-md-4">
		          			<h2>Heading</h2>
		          			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		          			<p><a class="btn btn-primary" href="#">View details »</a></p>
	  					</div>
	  					
	  					
	  				</div>
	  				
	  				<div class="row">
	  					
	  					<div class="col-sm-6 col-md-4">
				  			<h2>Heading</h2>
		          			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		          			<p><a class="btn btn-primary" href="#">View details »</a></p>
						</div>
	   				
	   					<div class="col-sm-6 col-md-4">
		          
		          			<h2>More Important Points</h2>
		          			<ul>
		          				<li>The three main links in the navbar work</li>
		          				<li>They are all centralized in one file</li>
		          				<li>They change apearance to show you which page you are on.</li>
		          				<li>These colunms start as three columns then reduce as the browser shrinks</li>
				  			</ul>
		          			<p><a class="btn btn-primary" href="#">View details »</a></p>
						</div>
				
	 					<div class="col-sm-6 col-md-4">
		          			<h2>Heading</h2>
		          			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		          			<p><a class="btn btn-primary" href="#">View details »</a></p>
	  					</div>
	  					
	  					
	  				</div>
	  				
	  				<div class="row">
	  					
	  					<div class="col-sm-6 col-md-4">
				  			<h2>Heading</h2>
		          			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		          			<p><a class="btn btn-primary" href="#">View details »</a></p>
						</div>
	   				
	   					<div class="col-sm-6 col-md-4">
		          
		          			<h2>Even More Important Points to illustrate the Fixed Nav-bar scroll feature</h2>
		          			<ul>
		          				<li>The three main links in the navbar work</li>
		          				<li>They are all centralized in one file</li>
		          				<li>They change apearance to show you which page you are on.</li>
		          				<li>These colunms start as three columns then reduce as the browser shrinks</li>
				  			</ul>
		          			<p><a class="btn btn-primary" href="#">View details »</a></p>
						</div>
				
	 					<div class="col-sm-6 col-md-4">
		          			<h2>Heading</h2>
		          			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		          			<p><a class="btn btn-primary" href="#">View details »</a></p>
	  					</div>
	  					
	  					
	  				</div>
  			</div><!-- End container -->
  	
  	
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
 </body>
 
 
</html>







