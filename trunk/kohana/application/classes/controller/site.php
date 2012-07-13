<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Site extends Controller_Template
{

    public $template = 'template'; // bug 02/07/12 só aceita o nome $template porque herda da class Controller_Template

    public function session()
    {
        $this->session = Session::instance();
    }

    public function action_index()
    {
        $this->template->content = View::factory('site/index');
    }

    public function action_gil()
    {
        $this->template->content = 'hello, world!<br>Admin Base';
    }

    public function action_list()
    {
        echo $this->request->param('id') . '<br />';
        echo $this->request->param('id2');
        //http://beto.euqueroserummacaco.com/blog/sua-primeira-aplicacao-com-o-framework-kohana/
        //http://kowsercse.com/2011/09/04/kohana-tutorial-beginners/
        ////qualquer nome erra da tabela da erro estranho!!
        //Seleciona todos os posts          
        $dados = ORM::Factory('site')->order_by('dado_id', 'desc')->find_all();
        //Seleciona a View de lista de posts,
        //une o objetos Post selecionado acima a view
        $view = View::Factory('site/list');
        $view->set('dados', $dados);
        //Envia a renderizacao da view ao browser
        $this->template->content = $view;
    }

    public function action_form()
    {
        $id = $this->request->param('id');
        $dados = ORM::factory('site', $id);
        $view = new View('site/form');
        $view->set("dados", $dados);
        $this->template->content = $view;
    }

    // loads the new dados form
    public function action_new()
    {
        $dados = new Model_Article();
        $view = new View('dados/edit');
        $view->set("dados", $dados);
        $this->response->body($view);
    }

    // edit the dados
    public function action_edit()
    {
        $dados_id = $this->request->param('id');
        $dados = new Model_Site($dados_id);
        $view = new View('dados/edit');
        $view->set("dados", $dados);
        $this->response->body($view);
    }

    public function action_form_insert()
    {
        $this->session();
        $dados_id = $this->request->param('id');
        $dados = ORM::factory('Site', $dados_id);
        $dados->values($this->request->post()); // populate $dados object from $_POST array          
        if ($dados->save()) {
            //$dados->save(); // saves update dados to database
            $this->session->set('msg', '<div class="alert alert-success">
                        <a class="close" data-dismiss="alert" href="#">×</a><h1>Registro Inserido com sucesso!!</h1></div>');
            $this->request->redirect('site/list');
        } else {
            echo 'Error: Não carregou o model!!';
        }
        /* $entry = new Model_Site();
          $entry->form_insert();
          $dados = ORM::factory('site');
          $dados->dado_titulo = $this->request->post('dado_titulo');
          $dados->dado_resumo = $this->request->post('dado_resumo');
          $dados->dado_descricao = $this->request->post('dado_descricao');
          if ($dados->save()) {
          $this->request->redirect('site/form');
          } */
    }

// save the dados
    public function action_post()
    {
        $this->session();
        $dados_id = $this->request->param('id');
        $dados = new Model_Site($dados_id);
        $dados->values($_POST); // populate $dados object from $_POST array
        if ($dados->save()) {
            $this->session->set('msg', '<div class="alert alert-success">
                        <a class="close" data-dismiss="alert" href="#">×</a><h1>Registro Inserido com sucesso!!</h1></div>');
            $this->request->redirect('site/list');
        } else {
            echo 'Error: Não carregou o model!!';
        }
    }

    public function action_deletar()
    {
        $this->session();
        $id = $this->request->param('id');
        $deletar = ORM::factory('site', $id);
        // Use o ORM::loaded  para verificar se ORM carregado com êxito um registro..
        if ($deletar->loaded()) {
            $deletar->delete();
            $this->session->set('msg', '<div class="alert alert-success">
                        <a class="close" data-dismiss="alert" href="#">×</a><h1>Registro apagado com sucesso!!</h1></div>');
            $this->request->redirect('site/list');
        } else {
            echo 'Error: Não carregou o model!!';
        }
    }

    public function action_img()
    {
        $view = View::factory('site/upload');
        $this->template->content = $view;
    }

    public function action_upload()
    {
        $view = View::factory('site/upload');
        $error_message = NULL;
        $filename = NULL;

        if ($this->request->method() == Request::POST) {
            if (isset($_FILES['avatar'])) {
                $filename = $this->_save_image($_FILES['avatar']);
            }
        }

        if (!$filename) {
            $error_message = 'There was a problem while uploading the image.
                Make sure it is uploaded and must be JPG/PNG/GIF file.';
        }

        $view->uploaded_file = $filename;
        $view->error_message = $error_message;
        $this->template->content = $view;
    }

    protected function _save_image($image)
    {
        if (
                !Upload::valid($image) OR
                !Upload::not_empty($image) OR
                !Upload::type($image, array('jpg', 'jpeg', 'png', 'gif'))) {
            return FALSE;
        }

        $directory = DOCROOT . 'uploads/';
        $file = Upload::save($image, NULL, $directory);
        if ($file) {
            $filename = strtolower(Text::random('alnum', 20)) . '.jpg';
            //return $filename;  
            Image::factory($file)
                    ->resize(500, NULL, Image::WIDTH)
                    ->save($directory . $filename);  
            // Delete the temporary file
            unlink($file);

            return $filename;
        }

        return FALSE;
    }

}
// End Site
