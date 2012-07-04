<?php echo form::open('site/form_insert', array('class' => 'well form-inline')); ?>
<input type="text" name="dado_titulo" />
<input type="text" name="dado_resumo" />
<textarea name="dado_descricao" cols="50" rows="10"></textarea>
<?php echo form::submit('submit', 'Send'); ?>