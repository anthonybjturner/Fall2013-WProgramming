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
	
	<h2>Contact Us:</h2>
	
	<!-- Triggered when saving -->
	<? if(isset($_REQUEST['status']) && $_REQUEST['status'] == 'Saved'): ?>
		<div class="alert alert-success">
			<button type="button" class="close" aria-hidden="true">&times;</button>
			
		</div>
	<? endif; ?>
	
	
	<form action="?action=send-email" method="post"  class="form-horizontal row">
		<input type="hidden" name="id" value="<?=$model['id']?>" />
		
		<div class="form-group <?=isset($errors['FirstName']) ? 'has-error' : ''?>">
			<label for="FirstName" class="col-sm-2 control-label">First Name</label>
			<div class="col-sm-10">
				<input type="text" name="FirstName" id="FirstName" placeholder="First Name" class="form-control " value="<?=$model['FirstName']?>"  />
			</div>
			<span><?=@$errors['FirstName']?></span>
		</div>
		
		<div class="form-group <?=isset($errors['LastName']) ? 'has-error' : ''?>">
			<label for="LastName" class="col-sm-2 control-label">Last Name</label>
			<div class="col-sm-10">
				<input type="text" name="LastName" id="LastName" placeholder="Last Name" class="form-control " value="<?=$model['LastName']?>"  />
			</div>
			<span><?=@$errors['LastName']?></span>
		</div>
		
		<div class="form-group">
			<label for="Email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="text" name="Email" id="Email" placeholder="Email" class="form-control " value=""  />
			</div>
		</div>
		
		<div class="form-group">

			<label for="Message" class="col-sm-2 control-label">Message</label>
			<div class="col-sm-10">
					<textarea name="messsage" rows="7" cols="30" id="message" class="form-control ">
					</textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="form-control btn btn-primary" value="Send" />
			</div>
		</div>
	</form>
</div>













