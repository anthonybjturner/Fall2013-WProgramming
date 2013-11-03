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
                
                <div class="form-group <?=isset($errors['OrdersItems_id']) ? 'has-error' : ''?>">
                        <label for="OrdersItems_id" class="col-sm-2 control-label">Order Item</label>
                        <div class="col-sm-10">
                                <input type="text" name="OrdersItems_id" id="OrdersItems_id" placeholder="Order Item ID" class="form-control " value="<?=$model['OrdersItems_id']?>" />
                        </div>
                        <span><?=@$errors['OrdersItems_id']?></span>
                </div>

				<div class="form-group <?=isset($errors['Addresses_id']) ? 'has-error' : ''?>">
                        <label for="Addresses_id" class="col-sm-2 control-label">Addresses Id</label>
                        <div class="col-sm-10">
                                <input type="text" name="Addresses_id" id="Addresses_id" placeholder="Addresses ID" class="form-control " value="<?=$model['Addresses_id']?>" />
                        </div>
                        <span><?=@$errors['Addresses_id']?></span>
                </div>

                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save" />
                        </div>
                </div>
        </form>
</div>