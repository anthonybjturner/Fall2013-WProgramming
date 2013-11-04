<div class="container">
	
	<? $errors = isset($errors) ? $errors : array(); ?>

        <? if(isset($errors) && count($errors)): ?>
                <ul>
                <? foreach ($errors as $key => $value): ?>
                        <li><label><?=$key?>:</label> <?=$value?></li>
                <? endforeach; ?>
                </ul>
        <? endif; ?>
        
        <form action="?action=save" method="post" class="form-horizontal row">
                
                <input type="hidden" name="id" value="<?=$model['id']?>" />
                
                <div class="form-group <?=isset($errors['Name']) ? 'has-error' : ''?>">
                        <label for="Name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="Name" id="Name" placeholder="Name" class="form-control " value="<?=$model['Name']?>" />
                        </div>
                        <span><?=@$errors['Name']?></span>
                </div>

				<div class="form-group <?=isset($errors['Orders_id']) ? 'has-error' : ''?>">
                        <label for="Orders_id" class="col-sm-2 control-label">Orders Id</label>
                        <div class="col-sm-10">
                                <input type="text" name="Orders_id" id="Orders_id" placeholder="Orders ID" class="form-control " value="<?=$model['Orders_id']?>" />
                        </div>
                        <span><?=@$errors['Orders_id']?></span>
                </div>
                
                <div class="form-group <?=isset($errors['Products_id']) ? 'has-error' : ''?>">
                        <label for="Products_id" class="col-sm-2 control-label">Products Id</label>
                        <div class="col-sm-10">
                                <input type="text" name="Products_id" id="Products_id" placeholder="Products ID" class="form-control " value="<?=$model['Products_id']?>" />
                        </div>
                        <span><?=@$errors['Products_id']?></span>
                </div>

                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save" />
                        </div>
                </div>
        </form>
</div>