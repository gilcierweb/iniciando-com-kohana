<?php echo form::open('site/form_insert', array('class' => 'well form-horizontal')); ?>
<?php echo Form::input("dado_titulo", $dados->dado_titulo, array('class' => 'input-xsmall')); ?>
<?php echo Form::input("dado_resumo", $dados->dado_resumo, array('class' => 'input-xsmall')); ?>
<?php echo Form::textarea("dado_descricao", $dados->dado_descricao, array('class' => 'input-xlarge')); ?>
<?php echo form::submit('submit', 'Send', array('class' => 'btn')); ?>