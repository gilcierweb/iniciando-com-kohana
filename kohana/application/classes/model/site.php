<?php

defined('SYSPATH') or die('No direct access allowed.');

class Model_Site extends ORM
{

    public $_table_name = 'dados';
    public $_primary_key = 'dado_id';
    
    public function rules()
    {
        return array(
            'dado_titulo' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 32)),
                array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'first_name' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 32)),
                array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'last_name' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 32)),
                array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'email' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 127)),
                array('email'),
            ),
        );
    }
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
