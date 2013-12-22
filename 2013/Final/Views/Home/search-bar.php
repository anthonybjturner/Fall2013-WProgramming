<div class="container">
	<div class="well">
		
		<input class="col-sm-10" data-col="Products" id="products-tag"> 

		<button  data-col="btn" id ="search-button" class="btn-primary">Search</button>
			
	</div>
<div id="details"></div>
</div>

<?Script();?>
<? function Script(){ ?>

	<? global $model; ?>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script type="text/javascript">
			
		var details = $("#details"),
		input = $('input');		
		//Add autocomplete to each cell
		input.autocomplete({
			
		        source: "?action=terms&format=plain",
		        minLength: 3
		           
		 });
		    
		 input.autocomplete({
		 	search: function( event, ui ) {
		 		 	
		 		var data = $(this).val();
					//details.load("?action=search", {'data': data, format: 'plain'});
					details.load("?action=search", {'data': data, format: 'plain'});	

		 		}
		});
		
		$( "#search-button" ).on( "click", function(e){
			
			var data = [];
			//Add autocomplete to each cell
			$('input').each(function(){
				
				data.push( $(this).val());
				//data[$(this).data('col')] = $(this).val();	
			});
			
			$.post("?action=search", {'data': data, format: 'plain'});	
		});
	</script>

<? } ?>