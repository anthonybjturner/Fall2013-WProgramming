<?
	
	$location = 'home';
?>
	


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
  	   	
  	   	<? include('_nav.php'); ?> 
  	   
			<!-- main area -->
		  	<div class="container">
		 		 	
			  	
	  				<div class="jumbotron">
	  					
	  					<h1>Playground folder</h1>
						    
				    	<p>Welcome to the Bootstrap 101 basic template project</p>
	  					
			   			 <img src="../resources/images/madobe_small.jpg" alt="madobe anime computer science"></img>

    					
				    	
				    	
				    	<h2>What is a Computer Scientist?</h2>
				    	<p>
				    		
				    		
				    		Computer scientists are, in fact, scientists. They are focused with the theory of computational applications. 
				    		That means they understand the “why” behind computer programs. Using algorithms and advanced mathematics, 
				    		computer scientists invent new ways to manipulate and transfer information. Computer scientists are generally concerned with software, 
				    		operating systems and implementation.
				    		
				    	</p>
				    	
				    	<p>
							Like Neo in The Matrix, computer scientists can see and make sense of code. Computer science students will learn the fundamentals of 
							different programming languages, linear and discrete mathematics, and software design and development. Computer scientists study 
							the machine itself and understand how and why various computer processes operate the way they do.
							
						</p>
						
						<p>
							Simply put, computer scientists can talk to computers. The field is based in mathematics—the language of computers. 
							Computer scientists understand why computers work and can create a program or operating system that does what you want it to do. 
							Careers in computer scienceComputer science is a rapidly growing field and is expected to see large increases in employment opportunities. 
							High salaries are generally associated with computer science careers.
				    		
				    	</p>
				    	
				    	
	  					<a class="btn btn-lg btn-success" href="http://online.king.edu/information-technology/difference-between-a-computer-science-information-technology-degree/">Learn More</a>
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
  			</div><!-- End container -->
  	
  	 <script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="Scripts/main.js"></script>
    
    <!-- Javascript for setting the current shown page's nav link as active, and adds effects-->
    <script type="text/javascript">
    	$(function(){
    		$(".nav .home").addClass("active").fadeOut().fadeIn().fadeOut().fadeIn();
    	});
    </script>
    	
 </body>
</html>







