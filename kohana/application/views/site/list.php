<code>
    <h1>Lista de Posts ( <?php echo html::anchor('blog/form', 'Adicionar novo'); ?> )</h1>
    <?php foreach ($posts as $post) { ?>    

        <h2><?php echo $post->dado_titulo; ?></h2>
        <p>
            <?php echo $post->dado_resumo; ?>
        </p>
        <p>
            <?php echo $post->dado_descricao; ?>
        </p>

        <span>
            <?php echo html::anchor('blog/form/' . $post->dado_id, '[ Editar ] '); ?> 
            <?php echo html::anchor('blog/delete/' . $post->dado_id, '[ Excluir ] '); ?> 
        </span>
        <hr />    

    <?php } ?>
</code>