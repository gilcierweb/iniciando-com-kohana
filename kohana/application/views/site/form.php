<?php echo form::open('site/form_insert', array('class' => 'well form-horizontal')); ?>
 <label for="dado_titulo">Username:</label>
    <input id="dado_titulo" type="text" name="dado_titulo" value="<?= Arr::get($values, 'dado_titulo'); ?>" />
    <label for="dado_titulo" class="error"><?= Arr::get($errors, 'dado_titulo'); ?>
 
<?php echo Form::input("dado_titulo", $dados->dado_titulo, array('class' => 'input-xsmall')); ?>
<?php echo Form::input("dado_resumo", $dados->dado_resumo, array('class' => 'input-xsmall')); ?>
<?php echo Form::textarea("dado_descricao", $dados->dado_descricao, array('class' => 'input-xlarge')); ?>
<?php echo form::submit('submit', 'Send', array('class' => 'btn')); ?>