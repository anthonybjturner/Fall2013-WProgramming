<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />

<div class="container">
	
	<h2>Addresses</h2>
	
	<table class="table table-hover table-bordered table-striped table-condensed">
		
		<thead>
		<tr>
			
			<!-- Always match up th with td -->
			<th>ID</th>
			<th>City</th>
			<th>State</th>
			<th>Zipcode</th>
			<th>User ID</th>
			<th>Address Type</th>

		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>

			<tr> 
				<td><?=$rs['id']?></td>
				<td><?=$rs['City']?></td>
				<td><?=$rs['State']?></td>
				<td><?=$rs['Zipcode']?></td>
				<td><?=$rs['2013Fall_Users_id']?></td>
				<td><?=$rs['AddressType']?></td>

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