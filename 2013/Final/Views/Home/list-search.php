
<div class="container">
	<h3>Results</h3>
		<table class="table table-hover table-bordered table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Images</th>
				</tr>
			</thead>
			
			<tbody id="data-table">
				
			</tbody>
		</table>
</div>

<div id="details">
	
	
</div>
<script id="usersTemplate" type="text/x-handlebars-template">
	
	{{#each this}}
	<tr> 
		<td>{{Name}}</td>
		<td>{{Price}}</td>
        <td><img width="128px" height="128px" src="{{Picture_Url}}"/></td>  

	</tr>
	{{/each}}
</script>

<?Scripts();?>
  <? function Scripts(){ ?>
	<? global $model; ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script src="../../Resources/Scripts/handlebars-v1.1.2.js"></script>

	<script type="text/javascript">

		
		var template = $.trim( document.getElementById("usersTemplate").innerHTML);
		var template = Handlebars.compile( $("#usersTemplate").html() );
		$("#data-table").append(template(<?=json_encode($model);?>));
		
		
</script>
<? }?>