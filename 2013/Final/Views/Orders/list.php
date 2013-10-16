<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />

<div class="container">
	
	<h2>Orders</h2>
	
	<table class="table table-hover table-bordered table-striped table-condensed">
		
		<thead>
		<tr>
			
			<!-- Always match up th with td -->
			<th>Order Item ID</th>
			<th>Users ID</th>
			<th>Address ID</th>
			
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>

			<tr> 
				<td><?=$rs['OrdersItems_id']?></td>
				<td><?=$rs['2013Fall_Users_id']?></td>
				<td><?=$rs['2013Fall_Addresses_id']?></td>

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