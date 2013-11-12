<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />

<style>
	
	.table tr.success, .table tr.success td{
		
		background-color: #FFAA00 !important;
	}
	
	#table-wrapper{
		
		transition: width .5s;
		-webkit-transition: width .5s; 

	}
	
</style>

<div class="container">
	
	<h2>Users</h2>
	
	<? if(isset($_REQUEST['status']) && $_REQUEST['status'] == 'Saved'): ?>
	
 		<div class="alert alert-success">			
			  <button type="button" class="close"  aria-hidden="true">&times;</button>
			  <b>Success!</b> Your User has been saved.
		</div>
	<? endif; ?>
	
	<a class="glyphicon glyphicon-plus" href="?action=new">Add Contact</a>
	
	<div id="table-wrapper" class="col-md-12">
		<table class="table table-hover table-bordered table-striped">
			
			<thead>
				<tr>
					
					<!-- Always match up th with td -->
					<th>First Name</th>
					<th>Last Name</th>
					<th>User Type</th>
					<th>Facebook Id</th>
					<th>Action</th>
				</tr>
			</thead>
			
			<tbody>
				<? foreach ($model as $rs):?>
				
					<!-- Get all the columns and fields from the model-->
		
					<!-- Populate the table with the rows/records -->
					<!-- If the row has been selected, then give it a class of 'success' , which will allow it to be highlighted -->
					
						
					<tr class=" <?= $rs['id']==$_REQUEST['id'] ? 'success' : '' ?> ">
					
						<td><?=$rs['FirstName']?></td>
						<td><?=$rs['LastName']?></td>
						<td><?=$rs['UserType_Name']?></td>
						<td><?=$rs['fbid']?></td>
		
						<!-- Create links and buttons for each field/row-->
						<td>
							<a class ="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['id']?>" ></a>
							<a class ="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['id']?>" ></a>
							<a class ="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['id']?>" ></a>
						</td>
		
					</tr>
				
				<? endforeach; ?>
			</tbody>
		</table>
	</div><!-- End wrapping the table-->
	
	<!-- Holds details for each table's record -->
	<div id="details" class="col-md-6"></div>
	
</div> <!--  End container-->
	
<div id="myModal" class="modal fade"></div>

 <? function Scripts(){ ?>
 	
        <script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
			        $(function(){
			        	
			                $(".table").dataTable();
			                $(".alert .close").click(function(){
			                        $(this).closest(".alert").slideUp();
			                });
			
			             	$(".table a").click(function(){
			              	
			              
				              	if($(this).closest("tr").hasClass("success")){
				              		
				              			 $(".success").removeClass("success");//Find tr with class success and remove it
				              			 
				              			 //resize the div with id table-wrapper to the size of 12
				              			 //In-other-words, regrow the table to its normal full width size
				              			 $("#table-wrapper").removeClass("col-md-6").addClass("col-md-12");
				              			 
				              			 $("#details").html('');
				              			 
				       
				              	}else{
				              		
				              		 $(".success").removeClass("success");
				              		 $(this).closest("tr").addClass("success");
				              		 $("#table-wrapper").removeClass("col-md-12").addClass("col-md-6");//If device is narrower than medium
				              		 $("#details").load(this.href, {format: "plain"}, 
				              		 
				              		 	function(){
				              				
				              				$("#details form").submit(HandleSubmit);	
				              			});              		
				              	}
				              	
				              	return false;
			              	
			              });
			              
			              var HandleSubmit = function(){
			              	
			              	  $("#details").html(JSON.stringify($(this).serializeArray() ) );
			              	  return false;                              
			        		}
			        })
        
        </script>
<? } ?>