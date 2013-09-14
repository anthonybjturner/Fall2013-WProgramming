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
  	   	<!-- Navigation bar -->
  	   		
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
			              <li class="home"><a href="index.php">Home</a></li>
			              <li class="contact active"><a href="contact.php">Contact</a></li>
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
					<div class="well">

						<h1>Contact Info</h1>
						<p>I can be reached by filling out the below form. <a class="btn btn-default "> More info </a></p>
							
					</div>
					

					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">

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

	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

	</body>
</html>
