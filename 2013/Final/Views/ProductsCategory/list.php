<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />

<div class="container">
	
	<h2>Products Category</h2>
	<a href="?action=new">Add Product Category</a>
	
	<table class="table table-hover table-bordered table-striped table-condensed">
		
		<thead>
		<tr>
			
			<!-- Always match up th with td -->
			<th>Name</th>
			<th></th>
		
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>

			<tr> 
				<td ><?=$rs['Name']?></td>

				<td>
					<a class ="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['id']?>" data-toggle="modal" data-target="#myModal"></a>
					<a class ="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['id']?>"></a>
					<a class ="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['id']?>"></a>
				</td>

			</tr>
		
		<? endforeach; ?>
	
		</tbody>
	</table>

</div>

<? function Scripts(){ ?> 
	
		<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>	
		<script type="text/javascript">			
			$(".table").dataTable();
		</script>
	
<?	} ?>