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

}

// End Welcome
