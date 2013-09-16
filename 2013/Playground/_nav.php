
<!-- associative arrays -->
<?
	$pages = array(
		'home'=> array(
			'url' => 'index.php',
			'section' => 'home',
			'title' => 'Home'
		),
		
		'links'=> array('url' =>'links.php',
			'section' => 'links',
			'title' => 'home'
			),
			
		'contact'=> array(
			'url' =>'contact.php',
			'section' => 'contact',
			'title' => 'Contact Me'
			));
			
		
	
	$name = $pages[$location];
	$msg = "Hello $name[title]";
	
	//Adds array to the end of the nav links
	$pages[] = array('contact.php',
			'section' => 'contact',
			'title' => 'Contact Me'
			);
	

?>
	
	
		    <div class="navbar navbar-inverse navbar-fixed_top" role="navigation">
		    		<div class="container">

		   			 <div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".nav-c">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Playground</a>
					</div>
						
					<div class="collapse navbar-collapse nav-c">
						<ul class="nav navbar-nav">
							
							
							<li class="home <? if($location == 'home') echo "active"; ?>"><a href="./">Home</a></li>
							<li class="contact <? if($location == 'contact') echo "active"; ?>"><a href="contact.php">Contact</a></li>
							<li class="links <? if($location == 'links') echo "active"; ?>"><a href="links.php">Links</a></li>
							
							
							<!-- Get each key and value pair in the $pages array , dynamically generates a list of links-->
							<? foreach($pages as $name => $data): ?>
									
								<li class="<?=$data['section']?> <? if($location == $data['section']) echo "active"; ?>">
									<a href="<?=$data['title']?></a>
								</li>

							<? endforeach; ?>
							
							
							
							
							
							
							
							
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
						<p class="navbar-text pull-right">Signed in as <a href="#" class="navbar-link">Moshe Plotkin</a></p>
					</div>
					</div>
			</div>
			
<pre class="container">
	
	<? echo json_encode($pages); ?>
</pre>
