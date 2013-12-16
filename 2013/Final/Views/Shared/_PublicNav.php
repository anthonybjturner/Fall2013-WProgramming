<div class="navbar navbar-default" role="navigation">

    	<div class="container">

	   			 <div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".nav-c">
						<!-- This is for mobile users -->
						<span class="sr-only">Toggle navigation</span>
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
		      		
		      		<li>

						<a class="navbar-link" href="/~turnera1/2013/Final/Views/Users">Login</a>
					</li>
		      		
				</ul>
				
				
				
				<? $user=Auth::GetUser(); 
					if (isset($user['LastName'])){
							
						$var="Signed in as "; 
						$name = $user['LastName'];
					}
					
					else {
						$var="Sign in ";							
						$name="Guest";
					}
				?>

				<p class="navbar-text pull-right">  
					<a href="?action=register" id="login" class="navbar-link"><? echo ($var.$name); ?></a>
				</p>
				
				<p class="navbar-text pull-right" id="shopping-cart">
                      <a href="#" class="navbar-link">Cart</a>
                 </p>				
			</div>
		</div>
	</div>
	
