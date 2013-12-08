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
	
	
	<div id="table-wrapper" class="col-md-12">
		
		<table class="table table-hover table-bordered table-striped table-condensed">
			
			<thead>
			<tr>
				
				<!-- Always match up th with td -->
				<th>Name</th>
				<th>Price</th>
				<th>Description</th>
				<th>Picture</th>
				<th>Suppliers Id</th>
				<th>Product Category Id</th>
				<th>Action</th>
	
			</tr>
			</thead>
			<tbody>
			
			</tbody>
		</table>
	</div>
	
<div id="details" class="col-md-6"></div>	
	
</div>


<script id="row-template" type="text/x-handlebars-template">
		<td>{{Name}}</td>
		<td>{{Price}}</td>
		<td>{{Description}}</td>
		<td>{{Picture_Url}}</td>
		<td>{{Suppliers_id}}</td>
		<td>{{ProductsCategory_id}}</td>

		<td>
			<a class="glyphicon glyphicon-file" href="?action=details&id={{id}}" ></a>
			<a class="glyphicon glyphicon-trash" href="?action=delete&id={{id}}" ></a>
		</td>
</script>

<script id="tbody-template" type="text/x-handlebars-template">
	{{#each .}}
		<tr>
			{{> row-template}}
		</tr>
	{{/each}}
</script>
	

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
		
		
		var curDialogAction = null;
		var templateRow = Handlebars.compile($("#row-template").html());
		Handlebars.registerPartial("row-template", templateRow);				
		var tableTemplate = Handlebars.compile($("#tbody-template").html());
							
		$(".table tbody").html(tableTemplate(<?=json_encode($model);?>))	
		
		$(".table").dataTable();
				
		$(".table a").click(function(){
			
			if($(this).closest("tr").hasClass("success2")){
				HideDialog();
			}else{
				curDialogAction = "update";
				ShowDialog(this.href, $(this).closest("tr"))
			}
			
			return false;
		});
		
		var HandleSubmit = function (){
			
			var data = $(this).serializeArray();
			data.push({name:'format', value:'json'});		
			
			$.post(this.action, data, function(results){
				
				if(results.errors){
					
					toastr.error(results.errors, "Error");	
		
				}else{
					
					if(curDialogAction == "add"){

						toastr.success("Adding", "Success");
						
					}else{
						$(".success2").html(templateRow(results.model));					
						toastr.success("Your record has been saved!", "Success");
					}
				}
				
			}, 'json');
			return false;
		}
		
		var ShowDialog = function(url, /*optional*/selectedRow){
				
				$(".success2").removeClass("success2");
				if(selectedRow){
					selectedRow.addClass("success2");
				}
				
				//Shrink the table
				$("#table-wrapper").removeClass("col-md-12").addClass("col-md-6");
				
				$("#details").load(url, {format: "plain"}, function(){
					$("#details form").submit(HandleSubmit);					
				});							
		}
		
		var HideDialog = function(){
				$(".success2").removeClass("success2");
				$("#table-wrapper").removeClass("col-md-6").addClass("col-md-12");
				$("#details").html('');						
		}
		
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
