<h1>Banners</h1>
    <hr />
    <?php
    //var_dump($total);
    if ($total == '0') {
        echo '<h2  class="alert alert-error">Nenhum Banner Cadastrado</h2>';
    } else {

        foreach ($list as $row) {
            $id = $row->banner_id;
            $banner_titulo = $row->banner_titulo;
            $banner_imagem = $row->banner_imagem;
            ?>

            <h2>Titulo: <?php echo $banner_titulo; ?></h2>    
            <p>Banner:</p> 
            <p><img src="<?php echo site_url(); ?>banner_img/<?php echo $banner_imagem; ?>" width="936" height="346"/></p>    

            <div class="operacao">
                <p><a href="<?php echo site_url(); ?>adm/banners/editar/<?php echo $id; ?>"><img src="<?php echo base_url(); ?>img/editar.png" width="30" height="30" title="Editar"/></a></p>
                <p><a href="<?php echo site_url(); ?>adm/banner_delete/<?php echo $id; ?>"><img src="<?php echo base_url(); ?>img/button_cancel.png" width="30" height="30"  title="Deletar"/></a></p>
            </div>
            <hr />

            <?php
        }
    }
    ?>