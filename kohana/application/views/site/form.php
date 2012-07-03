<?php
echo form::open('site/form_insert',array('class'=>'well form-inline'));

echo form::input('dado_titulo', '');
echo form::input('dado_resumo', '');
echo form::input('dado_descricao', '');

echo form::submit('submit', 'Send');

?>
