<?php echo form::open('site/form_insert', array('class' => 'well form-horizontal')); ?>
  <?php echo Form::input("dado_titulo", $article->dado_titulo,array('class' => 'input-xsmall')); ?>
  <?php echo Form::input("dado_resumo", $article->dado_resumo,array('class' => 'input-xsmall')); ?>
  <?php echo Form::textarea("dado_descricao", $article->dado_descricao,array('class' => 'input-xlarge')); ?>
<?php echo form::submit('submit', 'Send', array('class' => 'btn')); ?>