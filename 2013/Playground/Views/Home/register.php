<div class="container">
	<? $errors = isset($errors) ? $errors : array(); ?>
	<? if(isset($errors) && count($errors)): ?>
		<ul>
		<? foreach ($errors as $key => $value): ?>
			<li><label><?=$key?>:</label> <?=$value?></li>
		<? endforeach; ?>
		</ul>
	<? endif; ?>
	
	
	<form action="?action=save" method="post"  class="form-horizontal row">
		<input type="hidden" name="id" value="<?=$model['id']?>" />
		
		<div class="form-group <?=isset($errors['FirstName']) ? 'has-error' : ''?>">
			<label for="FirstName" class="col-sm-2 control-label">First Name</label>
			<div class="col-sm-6">
				<input type="text" name="FirstName" id="FirstName" placeholder="First Name" class="form-control " value="<?=$model['FirstName']?>"  />
			</div>
			<span><?=@$errors['FirstName']?></span>
		</div>
		
		<div class="form-group <?=isset($errors['LastName']) ? 'has-error' : ''?>">
			<label for="LastName" class="col-sm-2 control-label">Last Name</label>
			<div class="col-sm-6">
				<input type="text" name="LastName" id="LastName" placeholder="Last Name" class="form-control " value="<?=$model['LastName']?>"  />
			</div>
			<span><?=@$errors['LastName']?></span>
		</div>
		<div class="form-group <?=isset($errors['Password']) ? 'has-error' : ''?>">
			<label for="Password" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-6">
				<input type="password" name="Password" id="Password" placeholder="Password" class="form-control "  value="<?=$model['Password']?>" />
			</div>
			<span><?=@$errors['Password']?></span>
		</div>
		
		<div class="form-group <?=isset($errors['Email']) ? 'has-error' : ''?>">
            <label for="Email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-6">
				<input type="password" name="Email" id="Email" placeholder="Email" class="form-control "  value="<?=$model['Email']?>" />
			</div>
                 <span><?=@$errors['Email']?></span>
            </div>

		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-6">
				<input type="submit" class="form-control btn btn-primary" value="Save" />
			</div>
		</div>
	</form>
</div>

<script type="text/javascript">
          
</script>




