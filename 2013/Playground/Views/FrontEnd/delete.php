<div class="container col-md-offset-2" >
	
	<h3>Are you sure you want to delete? <br><?= $model['Name']?></h3>
		
	<form action="action=delete" method="post">
		<input type="hidden" name="id" value="<?=$model['id']?>"/>
		<input type="submit" value="Delete" class="btn btn-primary" />
		
		<a href="?action=shopping-cart">
			<button type="button" class="btn btn-default">
				No
			</button>
		</a>
	</form>
</div>

