<?php echo form::open('site/form_insert', array('class' => 'well form-horizontal')); ?>
<input type="text" name="dado_titulo" class="input-xsmall"/>
<input type="text" name="dado_resumo" class="input-xsmall"/>
<textarea name="dado_descricao" cols="50" rows="10" class="input-xlarge"></textarea>
<?php echo form::submit('submit', 'Send', array('class' => 'btn')); ?>