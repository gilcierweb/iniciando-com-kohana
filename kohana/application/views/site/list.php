<code>
    <h1>Lista de Dados ( <?php echo html::anchor('blog/form', 'Adicionar novo'); ?> )</h1>
    <?php foreach ($dados as $dado) { ?>    

        <h2><?php echo $dado->dado_titulo; ?></h2>
        <p>
            <?php echo $dado->dado_resumo; ?>
        </p>
        <p>
            <?php echo $dado->dado_descricao; ?>
        </p>
        <span>
            <?php echo html::anchor('blog/form/' . $dado->dado_id, '[ Editar ] '); ?> 
            <?php echo html::anchor('blog/delete/' . $dado->dado_id, '[ Excluir ] '); ?> 
        </span>
        <hr />    

    <?php } ?>
</code>