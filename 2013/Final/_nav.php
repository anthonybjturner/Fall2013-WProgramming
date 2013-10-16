<?
	$pages = array(
		
		'home'=> array(
			'url' => 'index.php',
			'section' => 'home',
			'title' => 'Home'
		),
		
		'links'=> array(
			'url' =>'links.php',
			'section' => 'links',
			'title' => 'Links'
		),
			
		'contact'=> array(
			'url' =>'contact.php',
			'section' => 'contact',
			'title' => 'Contact'
		),
		
		'about'=> array(
			'url' =>'about.php',
			'section' => 'about',
			'title' => 'About Me'
		)
	);
			
?>

<?
	$model_pages = array(
		
		'Addresses'=> array(
			'url' =>'Views/Addresses',
			'section' => 'AddressesModel',
			'title' => 'Addresses'
		),
		
		'Keywords'=> array(
			'url' =>'Views/Keywords',
			'section' => 'KeywordsModel',
			'title' => 'Keywords'
		),
		
		'Products'=> array(
			'url' =>'Views/Products',
			'section' => 'ProductsModel',
			'title' => 'Products'
		),
		
		'Users'=> array(
			'url' =>'Views/Users',
			'section' => 'UsersModel',
			'title' => 'Users'
		),
		
		'ContactMethods'=> array(
			'url' =>'Views/ContactMethods',
			'section' => 'ContactMethodsModel',
			'title' => 'Contact Methods'
		),
		
		'OrdersItems'=> array(
			'url' =>'Views/OrdersItems',
			'section' => 'OrdersItemsModel',
			'title' => 'Orders Items'
		),
		
		'Orders'=> array(
			'url' =>'Views/Orders',
			'section' => 'OrdersModel',
			'title' => 'Orders'
		),
		
		'PhoneNumbers'=> array(
			'url' =>'Views/PhoneNumbers',
			'section' => 'PhoneNumbersModel',
			'title' => 'PhoneNumbers'
		),
		
		'Suppliers'=> array(
			'url' =>'Views/Suppliers',
			'section' => 'SuppliersModel',
			'title' => 'Suppliers'
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
				<a class="navbar-brand" href="#">Final</a>
				
			</div>
				
			<div class="collapse navbar-collapse nav-c">
				
				<ul class="nav navbar-nav">
				
					<!-- Get each key and value pair in the $pages array , dynamically generates a list of links-->
					<? foreach($pages as $name => $data): ?>
							
						<li class=" <?=$data['section']?> "> 
							
							<a href=" <?=$data['url']?> "> 
								<?=$data['title'] ?> 
							</a>
						</li>
						
					<? endforeach; ?>
					
					
					<li class="dropdown">
		      			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Model Views <b class="caret"></b></a>
		      			  <ul class="dropdown-menu">
		      			  	
								<? foreach($model_pages as $name => $data): ?>
									
									<li class="<?=$data['section']?>">
										
										<a href="<?=$data['url']?>">
											<?=$data['title'] ?> 
										</a>
									</li>
			
							<? endforeach; ?>

		        		</ul>
		      		</li>
				</ul>
				
			</div>
   			 
		</div>
		
	</div>
	<!-- End navbar-->
	

