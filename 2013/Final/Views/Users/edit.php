<div class="container">
	
	
	
	<? $errors = isset($errors) ? $errors : array(); ?>

        <? if(isset($errors) && count($errors)): ?>
                <ul>
                <? foreach ($errors as $key => $value): ?>
                        <li><label><?=$key?>:</label> <?=$value?></li>
                <? endforeach; ?>
                </ul>
        <? endif; ?>
        
        <!-- User form -->
        <form action="?action=save" method="post" class="form-horizontal row">
        	                
                <input type="hidden" name="id" value="<?=$model['id']?>" />
                
                <!-- First name input field -->
                <div class="form-group <?=isset($errors['FirstName']) ? 'has-error' : ''?>">
                        <label for="FirstName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="FirstName" id="FirstName" placeholder="First Name" 
                                class="form-control " value="<?=$model['FirstName']?>" />
                        </div>
                        <span><?=@$errors['FirstName']?></span>
                </div>
                
				<!-- Last name input field -->
                <div class="form-group <?=isset($errors['LastName']) ? 'has-error' : ''?>">
                        <label for="LastName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="LastName" id="LastName" placeholder="Last Name" class="form-control " value="<?=$model['LastName']?>" />
                        </div>
                        <span><?=@$errors['LastName']?></span>
                </div>
                
                <!-- Password input field -->
                <div class="form-group <?=isset($errors['Password']) ? 'has-error' : ''?>">
                        <label for="Password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                                <input type="password" name="Password" id="Password" placeholder="Password" class="form-control " value="<?=$model['Password']?>" />
                        </div>
                        <span><?=@$errors['Password']?></span>
                </div>
                
                
                <div class="form-group <?=isset($errors['fbid']) ? 'has-error' : ''?>">
                        <label for="fbid" class="col-sm-2 control-label">Facebook Id</label>
                        <div class="col-sm-10">
                                <input type="text" name="fbid" id="fbid" placeholder="Facebook Id" class="form-control " value="<?=$model['fbid']?>" />
                        </div>
                        <span><?=@$errors['fbid']?></span>
                </div>
                
                <!-- UserType input field -->
                <div class="form-group <?=isset($errors['UserType']) ? 'has-error' : ''?>">
                        <label for="UserType" class="col-sm-2 control-label">User Type</label>
                        <div class="col-sm-10">
                             <select name="UserType" id="UserType" class="form-control">
								<? foreach (Keywords::GetSelectListFor(2) as $keywordRs):?><!-- Used for restricting user types-->
									
									<option <? if($model['UserType'] == $keywordRs['id']){ ?> selected="selected"<? } ?> value="<?=$keywordRs['id']?>"> <?=$keywordRs['Names']?></option>
									<!-- <option  value="<?=$keywordRs['id']?>"><?=$keywordRs['Names']?></option> -->

								<? endforeach; ?>
							</select>
                        </div>
                        <span><?=@$errors['UserType']?></span>
                </div>

			<!-- Submit field -->
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save" />
                        </div>
                </div>
        </form>
</div>

<!-- Option two for displaying UserTypes for ID keywords-->
<script type="text/javascript">
	$(function()){
		
		$("#UserType").val(<?=$model['UserType']?>);
		
	})
	
</script>