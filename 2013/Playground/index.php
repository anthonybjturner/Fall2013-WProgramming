<?
	$pages = array(
		'home'=> array(
			'url' => 'index.php',
			'section' => 'home',
			'title' => 'Home'
			),
		'links'=>'links.php', 
		'contact'=>'contact.php');

	$location = 'home';

	$name = $pages[$location];
	$msg = "Hello $name[title]";

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
  	<div class="container">
	  	<pre>
	  	<? print_r($pages); ?>  
	  			    <?php echo "hi" ?>

	  			
	  	</pre>
	  	
  		<div class="jumbotron">
		    <h1>test  </h1>
		    
		    <p>Welcome class of 2013 to Web Server Programming</p>
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
  	</div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
 </body>
</html>