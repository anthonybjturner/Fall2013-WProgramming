<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" type="text/css" rel="stylesheet" />
<style>


	#header{
		margin-top: 20px;
    	font-size: 80px;
    	text-align: center;
	}
	
	h3{
		
		color: #ff00ff;
	}
   
    .container img {
    		
    }
    
    #carousel-others-view{
    	
    	border-top: #000000 solid 1px;
    	border-bottom: #000000 solid 1px; 
    	
    }
    
    .carousel img{
    	
    		height: 200px;
    }
</style>

<div class="well" id="header">
	<header>
		Electronics
	</header>
	
</div>	  


<div class="container">
	
	<div class="carousel" id="carousel">

	   <img src="../../Resources/images/dell.png"> </img>
	   <img src="../../Resources/images/samsung-galaxy-note-2.jpg"> </img>
   	   <img src="../../Resources/images/adone.png"> </img>
   	   <img src="../../Resources/images/samsung-chromebook-600.jpg"> </img>
   	   <img src="../../Resources/images/cyberpowerpc-gamer-ultra-gua880-300px.jpg"> </img>

  	</div><!-- End container -->

	<div class="well">
		  					
	    	<p>Electronics</p>    					
			<a class="btn btn-lg btn-success" href="#">Learn More</a>
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
				items				: 3,
				direction			: "right",
				scroll : {
					items			: 1,
					easing			: "elastic",
					duration		: 1000,							
					pauseOnHover	: true,
					responsive 		: true,
					height			: "auto"

				}					
			});
			
			
						// Using custom configuration
			$("#carousel-others-view").carouFredSel({
				items				: 3,
				direction			: "right",
				scroll : {
					items			: 1,
					easing			: "elastic",
					duration		: 0,							
					pauseOnHover	: true,
					responsive 		: true,
					height			: "auto"

				}					
			});
			
				
		});	
	})
	</script>
<? } ?>
