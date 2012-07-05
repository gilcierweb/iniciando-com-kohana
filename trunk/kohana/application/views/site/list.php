<h1>Lista de Dados ( <?php echo html::anchor('site/form', 'Adicionar novo'); ?> )</h1>
<?php
$session = Session::instance();
if ($session->get('msg', TRUE)) {
    echo $session->get('msg');
}
?>
<?php foreach ($dados as $dado) { ?>    

    <h2><?php echo $dado->dado_titulo; ?></h2>
    <p>
        <?php echo $dado->dado_resumo; ?>
    </p>
    <p>
        <?php echo $dado->dado_descricao; ?>
    </p>
    <span>
    <?php echo html::anchor('site/form/' . $dado->dado_id, '[ Editar ] '); ?> 
    <?php echo html::anchor('site/deletar/' . $dado->dado_id, '[ Excluir ] '); ?> 
    </span>
    <hr />    

<?php } ?>