<div class="container">
	
	<form action="?action=confirm_delete" method="post">
		
		<input type="hidden" name="id" value="<?=$model['id']?>" />

		<h3>Are you sure you want to delete? <?= $model['Name']?></h3>
		<input type="submit" name="confirm" class="btn btn-primary" value="Yes" />
		<input type="submit" name="confirm" class="btn btn-default" value="No" />

	</form>

</div>


