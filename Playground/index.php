<? 

	$location = 'home';
	
	$pages = array(
		'home' => array(
			'url' => 'index.php')
			);
			

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>This is the Playground</h1>

	<div class="row">
  		<div class="col-xs-12 col-md-8">.col-xs-12 col-md-8</div>
  		<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
	</div>

	<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
	<div class="row">
	  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
	  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
	  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
	</div>

	<!-- Columns are always 50% wide, on mobile and desktop -->
	<div class="row">
	  <div class="col-xs-6">.col-xs-6</div>
	  <div class="col-xs-6">.col-xs-6</div>
	</div>





    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>
    	$(function()){<!-- Find every single item that has the ".home" class on it and highlight it -->
    		
    		
    		$(".home").addClass("active");
    		
    		
    	}
    
    
  </body>
</html>
