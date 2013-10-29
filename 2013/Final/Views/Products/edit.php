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
                
                <div class="form-group <?=isset($errors['City']) ? 'has-error' : ''?>">
                        <label for="Price" class="col-sm-2 control-label">Price</label>
                        <div class="col-sm-10">
                                <input type="text" name="Price" id="Price" placeholder="Price" class="form-control " value="<?=$model['Price']?>" />
                        </div>
                        <span><?=@$errors['Price']?></span>
                </div>
                <div class="form-group <?=isset($errors['Quantity']) ? 'has-error' : ''?>">
                        <label for="Quantity" class="col-sm-2 control-label">Quantity</label>
                        <div class="col-sm-10">
                                <input type="text" name="Quantity" id="Quantity" placeholder="Quantity" class="form-control " value="<?=$model['Quantity']?>" />
                        </div>
                        <span><?=@$errors['Quantity']?></span>
                </div>
                <div class="form-group <?=isset($errors['Suppliers_id1']) ? 'has-error' : ''?>">
                        <label for="Suppliers_id1" class="col-sm-2 control-label">Suppliers id</label>
                        <div class="col-sm-10">
                                <input type="text" name="Suppliers_id1" id="Suppliers_id1" placeholder="Suppliers id" class="form-control " value="<?=$model['Suppliers_id1']?>" />
                        </div>
                        <span><?=@$errors['Suppliers_id1']?></span>
                </div>
                <div class="form-group <?=isset($errors['OrdersItems_id1']) ? 'has-error' : ''?>">
                        <label for="OrdersItems_id1" class="col-sm-2 control-label">Orders Items id</label>
                        <div class="col-sm-10">
                                <input type="text" name="OrdersItems_id1" id="OrdersItems_id1" placeholder="Orders Items id" class="form-control " value="<?=$model['OrdersItems_id1']?>" />
                        </div>
                        <span><?=@$errors['OrdersItems_id1']?></span>
                </div>

         
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save" />
                        </div>
                </div>
        </form>
</div>