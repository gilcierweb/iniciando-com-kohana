<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Site extends Controller_Template
{

    public $template = 'template'; // bug 02/07/12 só aceita o nome $template porque herda da class Controller_Template

    public function action_index()
    {
        $this->template->content = View::factory('site/index');
    }

    public function action_gil()
    {
        $this->template->content = 'hello, world!<br>Admin Base';
    }

    public function action_form()
    {
        $this->template->content = View::factory('site/form');
    }

    public function action_form_insert()
    {
//        $entry = new Model_Site();
//        $entry->form_insert();
        $article = ORM::factory('site');
        $article->dado_titulo = $this->request->post('dado_titulo');
        $article->dado_resumo = $this->request->post('dado_resumo');
        $article->dado_descricao = $this->request->post('dado_descricao');
        if ($article->save()) {
            $this->request->redirect('site/form');
        }
    }

}

// End Welcome