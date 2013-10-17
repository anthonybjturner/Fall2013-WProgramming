<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />

<div class="container">
	
	<h2>Users</h2>
	
	<table class="table table-hover table-bordered table-striped">
		
		<thead>
		<tr>
			
			<!-- Always maych up th with td -->
			<th>First Name</th>
			<th>Last Name</th>
			<th>Type</th>
			<th>Facebook</th>
			<th>Details</th>

		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>

			<tr> 
				<td><?=$rs['FirstName'] ?></td>
				<td><?=$rs['LastName']?></td>
				<td><?=$rs['UserType']?></td>				
				<td><?=$rs['fbid']?></td>				


				<td><a class ="btn glyphicon glyphicon-file" href="?action=details&id=<?=$rs['id']?>"></a></td>
				<td><a class ="btn glyphicon glyphicon-pencil" href="?action=details&id=<?=$rs['id']?>"></a></td>
				<td><a class ="btn glyphicon glyphicon-file" href="?action=details&id=<?=$rs['id']?>"></a></td>

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
