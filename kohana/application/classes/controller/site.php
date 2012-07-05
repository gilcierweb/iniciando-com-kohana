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

    public function action_list()
    {//qualquer nome erra da tabela da erro estranho!!
        //Seleciona todos os posts          
        $dados = ORM::Factory('site')->find_all();
        //Seleciona a View de lista de posts,
        //une o objetos Post selecionado acima a view
        $view = View::Factory('site/list');
        $view->set('dados', $dados);
        //Envia a renderizacao da view ao browser
        $this->template->content = $view;
    }

    public function action_form()
    {
        $article_id = $this->request->param('id');
        $article = new Model_Site($article_id);
        $article->values($_POST); // populate $article object from $_POST array
        $article->save(); // saves article to database

        $this->template->content = View::factory('site/form');
    }

    // loads the new article form
    public function action_new()
    {
        $article = new Model_Article();

        $view = new View('article/edit');
        $view->set("article", $article);

        $this->response->body($view);
    }

    // edit the article
    public function action_edit()
    {
        $article_id = $this->request->param('id');
        $article = new Model_Article($article_id);

        $view = new View('article/edit');
        $view->set("article", $article);

        $this->response->body($view);
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

// save the article
    public function action_post()
    {
        $article_id = $this->request->param('id');
        $article = new Model_Site($article_id);
        $article->values($_POST); // populate $article object from $_POST array
        $article->save(); // saves article to database         
        $this->request->redirect('site/list');
    }

    public function action_deletar()
    {
        $this->session = Session::instance();
        $id = $this->request->param('id'); //= $this->uri->segment(3); // igual ao codeigniter
        //echo $this->request->param('id');
        //Apaga o objeto post com o id passado
        //como parametro    
        $deletar = ORM::factory('site', $id);
        // Use o ORM::loaded  para verificar se ORM carregado com êxito um registro..
        if ($deletar->loaded()) {
            $deletar->delete();
            $this->session->set('msg', '<div class="alert alert-success">
<a class="close" data-dismiss="alert" href="#">×</a><h1>Registro apagado com sucesso!!</h1></div>');
        } else {
            echo 'Error: Não carregou o model!!';
        }
//        ORM::factory('site',$id)
//                ->delete();
        //tá dando erro model não carregado não sei resolver
        //era $deletar->loaded() isso não carregava o model o loaded garante que foi achado
        //http://groups.google.com/group/kohana-php/browse_thread/thread/8e8e125143facb7e
        //redireciona para o controller blog
        $this->request->redirect('site/list');
    }

}

// End Welcome
