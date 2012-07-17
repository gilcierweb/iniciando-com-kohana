<h1>Banners</h1>
<hr />
<?php
$session = Session::instance();
if ($session->get('msg', TRUE)) {
    echo $session->get('msg');
}
?>
<?php echo form::open('adm/banner_create', array('enctype' => 'multipart/form-data', 'class' => 'well form-horizontal')); ?>  
<fieldset>
    <legend>Cadastrar Banner</legend>
    <div class="grid-7-12">
        <label>Titulo:</label>           
        <input type="text" name="banner_titulo" value="" />   
    </div>
    <div class="grid-7-12">
        <label>Upload: Imagem 936x346</label>
        <input type="file" name="banner_imagem" id="banner_imagem" />
    </div>
    <div class="grid-7-12">
        <label>Link Banner: ex: http://www.dominio.com.br</label>
        <input type="text" name="banner_link" value="" /> 
    </div>
    <div class="grid-6-12">
        <p class="button"><input type="hidden" name="action" value="insert" />
            <input type="submit" value="Cadastrar Banner" class="btn"/>
            <input type="reset" value="Limpar" class="btn"/>
    </div>
</fieldset>
</form>


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
        <p><img src="<?php echo url::base(); ?>banner_img/<?php echo $banner_imagem; ?>" width="936" height="346"/></p>    

        <div class="operacao">
            <p><a href="<?php echo url::base(); ?>adm/banners/editar/<?php echo $id; ?>"><img src="<?php echo url::base(); ?>img/adm/editar.png" width="30" height="30" alt="Editar" title="Editar"/></a></p>
            <p><a href="<?php echo url::base(); ?>adm/banner_delete/<?php echo $id; ?>"><img src="<?php echo url::base(); ?>img/adm/button_cancel.png" width="30" height="30" alt="Deletar" title="Deletar"/></a></p>
        </div>
        <hr />

        <?php
    }
}
?>