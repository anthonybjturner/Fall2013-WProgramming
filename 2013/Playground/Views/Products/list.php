<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />

<div class="container">
	
	<h2>Products</h2>
	<a href="?action=new&format=dialog" data-toggle="modal" data-target="#myModal">Add Product</a>
	
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
		<? foreach ($model as $rs): ?>

			<tr> 
				<td><?=$rs['Name']?></td>
				<td><?=$rs['Price']?></td>
				<td><?=$rs['Description']?></td>
				<td><?=$rs['Picture_Url']?></td>
				<td><?=$rs['Suppliers_id']?></td>
				<td><?=$rs['ProductsCategory_id']?></td>


				<td>
					<a class ="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
					<a class ="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['id']?>format=dialog" data-toggle="modal" data-target="#myModal"></a>
					<a class ="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['id']?>format=dialog" data-toggle="modal" data-target="#myModal"></a>
				</td>

			</tr>
		
		<? endforeach; ?>
	
		</tbody>
	</table>

</div>

<div class="modal fade" id="myModal"></div>

<? function Scripts(){ ?> 
	
		<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>	
		<script type="text/javascript">			
			$(".table").dataTable();
		</script>
	
<?	} ?>