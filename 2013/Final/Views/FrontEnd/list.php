<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" type="text/css" rel="stylesheet" />
<style>

    	
    .container img {
    
    	
    	max-width:	100%;
    	max-height: 100%;
    		
    }
</style>

<div class="container">
	
	<div id="carousel">
 	   <img src="../../Resources/images/dell.png"> </img>
   	   <img src="../../Resources/images/adone.png"> </img>
   	   <img src="../../Resources/images/samsung-chromebook-600.jpg"> </img>
   	   <img src="../../Resources/images/cyberpowerpc-gamer-ultra-gua880-300px.jpg"> </img>

  	</div><!-- End container -->

		<div class="jumbotron">
	  					
	  					<h1>Ecommerce folder</h1>
						    
				    	<p>Welcome to the Bootstrap 101 basic template project</p>
	  		
				    	
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

</div>


<div id="myModal" class="modal fade"></div>

  <? function Scripts(){ ?>
  	<? global $model; ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/1.1.2/handlebars.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.caroufredsel/6.2.1/jquery.carouFredSel.packed.js"></script>


	<script type="text/javascript">
	$(function(){
		$(document).ready(function() {

			// Using custom configuration
			$("#carousel").carouFredSel({
				items				: 4,
				direction			: "right",
				scroll : {
					items			: 1,
					easing			: "elastic",
					duration		: 1000,							
					pauseOnHover	: true
				}					
			});	
		});	
	})
	</script>
<? } ?>
