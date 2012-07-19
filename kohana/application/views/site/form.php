<?php if ($errors): ?>
<p class="message">Some errors were encountered, please check the details you entered.</p>
<ul class="errors">
<?php foreach ($errors as $message): ?>
    <li><?php echo $message ?></li>
<?php endforeach ?>
<?php endif ?>
<?php echo form::open('site/form_insert', array('class' => 'well form-horizontal')); ?>
 <label for="dado_titulo">Username:</label>
    <input id="dado_titulo" type="text" name="dado_titulo" value="" />
    <label for="dado_titulo" class="error">
 
<?php echo Form::input("dado_titulo", $dados->dado_titulo, array('class' => 'input-xsmall')); ?>
<?php echo Form::input("dado_resumo", $dados->dado_resumo, array('class' => 'input-xsmall')); ?>
<?php echo Form::textarea("dado_descricao", $dados->dado_descricao, array('class' => 'input-xlarge')); ?>
<?php echo form::submit('submit', 'Send', array('class' => 'btn')); ?>