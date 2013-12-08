<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" type="text/css" rel="stylesheet" />
<style>
	.table tr.success2, .table tr.success2 td{
		background-color: #00FF00 !important; 
	}
	#table-wrapper{
		transition: width .5s;
		-webkit-transition: width .5s;
	}
</style>
<div class="container">
	
	<h2>About</h2>
	
	<!-- Triggered when saving -->
	<? if(isset($_REQUEST['status']) && $_REQUEST['status'] == 'Saved'): ?>
		<div class="alert alert-success">
			<button type="button" class="close" aria-hidden="true">&times;</button>
			
		</div>
	<? endif; ?>
	
	
	<div id="table-wrapper" class="col-md-12">
		<table class="table table-hover table-bordered table-striped">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
	<div id="details" class="col-md-6"></div>
</div>

<div id="myModal" class="modal fade"></div>













