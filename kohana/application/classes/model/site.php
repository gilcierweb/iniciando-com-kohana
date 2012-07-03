<?php

defined('SYSPATH') or die('No direct access allowed.');

class Model_Site extends ORM
{

    public $_table_name = 'dados';

    public function __construct()
    {
        // load database library into $this->db (can be omitted if not required)
        parent::__construct();
    }

//    protected $model = 'model_site';
    //protected $table_name = 'dados';
//
//    public function form_lista()
//    {
//        // Get stuff from the database:
//        //return $this->db->query(...);
//    }
//
    public function form_insert()
    {
        // This is where you do domain logic...
        //$article = ORM::factory('site');
        $article->dado_titulo = 'New title';
        $article->dado_resumo = 'New title';
        $article->dado_descricao = 'New title';
        if ($article->save()) {
            $this->request->redirect('site/form');
        }
    }

}
