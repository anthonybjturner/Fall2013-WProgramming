<?
	$model_pages = array(
		
		'ProductsCategory'=> array(
			'url' =>'Views/ProductsCategory',
			'section' => 'ProductsCategoryModel',
			'title' => 'Products Category'
		),
		
		'Products'=> array(
			'url' =>'Views/Products',
			'section' => 'ProductsModel',
			'title' => 'Products'
		)
	);
?>

<?
	$pages = array(
		
		'today-deals'=> array(
			'url' =>'today-deals.php',
			'section' => 'today-deals',
			'title' => 'Todays deals'
		),
		'wishlist'=> array(
			'url' => 'wishlist.php',
			'section' => 'wishlist',
			'title' => 'Wishlist'
		)
	);
?>
    
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	
    	<div class="container">

   			 <div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".nav-c">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../../index.php">Amazoff</a>
				
			</div>
				
			<div class="collapse navbar-collapse nav-c">
				
				<ul class="nav navbar-nav">
				
					<!-- Get each key and value pair in the $pages array , dynamically generates a list of links-->
					<? foreach($pages as $name => $data): ?>
							
						<li class=" <?=$data['section']?> "> 
							
							
							<a href="<?= "?action=".$name; ?>"> 
								<?=$data['title'] ?> 
							</a>
						</li>
						
					<? endforeach; ?>
					
					<li class="dropdown">
		      			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Departments <b class="caret"></b></a>
		      			  <ul class="dropdown-menu">
		      			  	
								<? foreach($model_cat as $name => $data): ?>
									
									<li class="<?=$data['Name']?>">
										<!-- Generate a url, removing white space and putting link to lower case-->
										<a href="<?= str_replace(" ", "-", strtolower( $data['Name'] )) ?>.php" >
											
											<?=$data['Name'] ?> 
										</a>
									</li>
			
							<? endforeach; ?>
		        		</ul>
		      		</li>
				</ul>
				<p class="navbar-text pull-right"> <a href="?action=signin" class="navbar-link">

						 <? "Please Sign in ";?>
						
					</a>
					<? if (isset($_COOKIE['username'])){
							$username = $_COOKIE['username']; 
							echo ($username);
							
						}else{
								
							echo ('cookie not set');
								
							}
					?>
						
				</p>
				
				<p class="navbar-text pull-right"> <a href="?action=shopping-cart" class="glyphicon glyphicon-shopping-cart"> Cart
					</a>
				</p>
			</div>
			<form class="navbar-search pull-right">
  				<input type="text" class="search-query" placeholder="Search">
			</form>
			
		</div>
		
		
		
	</div>
	<!-- End navbar-->