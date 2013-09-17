<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template - Contact</title>
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

						<h1>Contact Info</h1>
						<p>I can be reached by filling out the below form. <a class="btn btn-default "> More info </a></p>
							
					</div>
					

    		 	<div class="well">
					<div class="row">
						<div class="well col-lg-8 col-lg-offset-2">

								<h2> Contact me:</h2>
								<form class="form-horizontal">
								
									<!-- Input box for email address -->
									<div class="form-group">
										<label for="input_email1" class="col-md-2 control-label">Your email</label>
										<div class="col-md-10">
											
											<input type="email" class="form-control" id="input_email1" placeholder="Enter your Email address">
										</div>
									</div>
									
									<!-- Input area for composed message -->
									<div class="form-group">
										<label for="txt_msg" class="col-md-2 control-label">Message</label>
										<div class="col-md-10">
											
											<textarea class="form-control" id="txt_msg" placeholder="Leave me a message here"></textarea>
										</div>
									</div>
										
										<!-- Submit button -->
									<div class="form-group">
										<div class="col-md-offset-2 col-md-10">
											
											<input type="submit" class="btn" value="Submit"/>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
			</div>

	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="Scripts/main.js">
		
		
	</script>
	
	<!-- update/highlight based on javascript -->
	<script type="text/javascript">
    	$(function (){
		  
		  $(".nav .contact").addClass("active").fadeOut().fadeIn()
		});
    		
    </script>


	</body>
</html>
