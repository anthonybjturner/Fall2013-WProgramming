<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" type="text/css" rel="stylesheet" />
<style>
	.table tr.success2, .table tr.success2 td{
		background-color: #00FF00 !important; 
	}
	
	body { padding-top: 70px; }
    	
    	#main-content{
    		
    	
    	}
    	.container img {
    		
    		max-height:	100%; 
    		max-width:	100%;
    	}
</style>

<div class="container">
	
	<div class="jumbotron">
			    
 	    <h2><?=$title?></h2>

  	</div><!-- End container -->
	
	
			
	<div id="main-content">

		<img src="Resources/images/anime-onnana.jpg"> </img>

	</div>
			  
 	
	
	<div id="details" class="col-md-6"></div>
</div>

<div id="myModal" class="modal fade"></div>

  <? function Scripts(){ ?>
  	<? global $model; ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/1.1.2/handlebars.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script type="text/javascript">
	$(function(){
		var curDialogAction = null;
		
		$(".alert .close").click(function(){
			$(this).closest(".alert").slideUp();
		});
		
		$("#add-link").click(function(){
			
			curDialogAction = "add";
			ShowDialog(this.href); 
			return false;
		});
		
		$("#main-content a").click(function(){
			
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

			//Temp code to be removed later
			if(curDialogAction == "add"){

				toastr.success("Adding", "Success");
				curDialogAction = null;
				header("Location: ?status=Saved&id=$_REQUEST[id]");
				die();		

			}
			
			$.post(this.action, data, function(results){
				
				if(results.errors){
					
					toastr.error(results.errors, "Error");	
		
				}else{
					
					toastr.success("Submitting", "Success");

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
					toastr.success("SelectedRow", "Success");
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
	})
	</script>
<? } ?>
