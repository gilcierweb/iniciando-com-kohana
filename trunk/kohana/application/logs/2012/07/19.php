<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-19 10:07:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\site\form.php [ 1 ]
2012-07-19 10:07:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\site\form.php [ 1 ]
--
#0 D:\xampp\htdocs\kohana\application\views\site\form.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 1, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\template.php(22): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Site))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}