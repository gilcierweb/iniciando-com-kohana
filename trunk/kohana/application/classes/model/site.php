<?php

defined('SYSPATH') or die('No direct access allowed.');

class Model_Site extends ORM
{

    public $_table_name = 'dados';
    public $_primary_key = 'dado_id';
    //protected $sorting = array('last_login' => 'desc', 'username' => 'asc');
   // public $sorting = array('dado_id' => 'desc');

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
    {//ainda não sei fazer ou não se dar pra fazer esse tipo de função como no codeigniter 03/07/12
        // This is where you do domain logic...
//        $article = ORM::factory();
//        $article->dado_titulo = 'New title';
//        $article->dado_resumo = 'New title';
//        $article->dado_descricao = 'New title';
//        if ($article->save()) {
//            $this->request->redirect('site/form');
//        }
    }

}
