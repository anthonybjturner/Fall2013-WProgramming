<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />

<div class="container">
	
	<h2>Addresses</h2>	
	<a href="?action=new&format=dialog" data-toggle="modal" data-target="#myModal">Add Address</a>
	
	
	<div id="table-wrapper" class="col-md-12">

		<table class="table table-hover table-bordered table-striped table-condensed">
			
			<thead>
				<tr>
					
					<!-- Always match up th with td -->
					<th>City</th>
					<th>State</th>
					<th>Zipcode</th>
					<th>User ID</th>
					<th>Address Type</th>
					<th>Action</th>
	
			</tr>
			
			</thead>
			
			<tbody>
				
				<? foreach ($model as $rs): ?>
		
					<? include 'item.php'; ?>
				
				<? endforeach ?>
		
			</tbody>
		</table>	
	</div>
	<!-- Holds details for each table's record -->
	<div id="details" class="col-md-6"></div>
</div>

	
	
</div> <!--  End container-->
	
<div id="myModal" class="modal fade">
	
</div>


<? function Scripts(){ ?> 
	
		<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script type="text/javascript">
        
        $(function(){
                $(".table").dataTable();
               
                $(".alert .close").click(function(){
                        $(this).closest(".alert").slideUp();
                });
                
           
                $(".table a").click(function(){
                        
                        
                        if($(this).closest("tr").hasClass("success")){
                                $(".success").removeClass("success");//Toggles highlighting
                                $("#table-wrapper").removeClass("col-md-6").addClass("col-md-12");
                                $("#details").html('');                        
                        }else{
                                $(".success").removeClass("success");
                                $(this).closest("tr").addClass("success");
                                $("#table-wrapper").removeClass("col-md-12").addClass("col-md-6");
                                
                                $("#details").load(this.href, {format: "plain"}, function(){
                                        $("#details form").submit(HandleSubmit);                                        
                                });                                
                        }
                        
                        return false;
                });
                
                var HandleSubmit = function (){
                	
					var data = $(this).serializeArray();
					data.push({name:'format', value:'plain'});
					//event.preventDefault();
					$.post(this.action, data, function(results){
						
						 //console.log(results);
						
						if($(results).find("form").length){
							$("#details").html(results);					
						}else{
							$(".success").html($(results).html())
						}
					});
			
					return false;
				}		
        })
        </script>
	
<?	} ?>