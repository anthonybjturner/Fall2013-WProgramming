<style>

	.container{
		
	
		
	}
	#form-wrapper{
		
		padding: 5px;
	}
	
	#register-wrapper{
		
		border: #C0C0C0 solid 1px;
		padding: 10px;
	}
</style>

<div class="container">
	
	<div class="col-md-6" id="form-wrapper">
			<? $errors = isset($errors) ? $errors : array(); ?>
			<? if(isset($errors) && count($errors)): ?>
				<ul>
				<? foreach ($errors as $key => $value): ?>
					<li><label><?=$key?>:</label> <?=$value?></li>
				<? endforeach; ?>
				</ul>
			<? endif; ?>
			
			
			
			<form action="?action=login" method="post"  class="form-horizontal row">
				<input type="hidden" name="id" value="<?=$model['id']?>" />
				
				
				
				<div class="form-group <?=isset($errors['Email']) ? 'has-error' : ''?>">
					<label for="Email" class=" col-sm-2 control-label">Email:</label>
					<div class="col-md-6">
						<input type="text" name="Email" id="Email" placeholder="Email" class="form-control " value="<?=$model['Email']?>"  />
					</div>
					<span><?=@$errors['Email']?></span>
				</div>
				
				
				<div class="form-group <?=isset($errors['Password']) ? 'has-error' : ''?>">
					<label for="Password" class="col-sm-2 control-label">Password:</label>
					<div class="col-md-6">
						<input type="password" name="Password" id="Password" placeholder="Password" class="form-control "  value="<?=$model['Password']?>" />
					</div>
					<span><?=@$errors['Password']?></span>
				</div>
	
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-6">
						<input type="submit" class="form-control btn btn-primary" value="Log in" />
					</div>
				</div>
			</form>
		
		</div>
	
		<div class="col-md-6" id="register-wrapper">

			<label for="Register" class="col-sm-2 control-label">Register</label>
			<p>Create an account today to reap the benefits of a personalized shopping experience. 
				With a Newegg.com account, you'll be able to conveniently place orders, create wish lists, 
				check the status of your recent orders and much more</p>
				<a class="btn btn-primary btn-large" href="?action=register">
    				Register
    			</a>	

	</div>
		
</div>
<script type="text/javascript">
            
</script>




