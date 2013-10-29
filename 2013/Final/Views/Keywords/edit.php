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
                
                <div class="form-group <?=isset($errors['ParentId']) ? 'has-error' : ''?>">
                        <label for="ParentId" class="col-sm-2 control-label">Parent Id</label>
                        <div class="col-sm-10">
                                <input type="text" name="ParentId" id="ParentId" placeholder="Parent Id" class="form-control " value="<?=$model['ParentId']?>" />
                        </div>
                        <span><?=@$errors['ParentId']?></span>
                </div>
                <div class="form-group <?=isset($errors['Names']) ? 'has-error' : ''?>">
                        <label for="Names" class="col-sm-2 control-label">Names</label>
                        <div class="col-sm-10">
                                <input type="text" name="Names" id="Names" placeholder="Name" class="form-control " value="<?=$model['Names']?>" />
                        </div>
                        <span><?=@$errors['Names']?></span>
                </div>

                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save" />
                        </div>
                </div>
        </form>
</div>