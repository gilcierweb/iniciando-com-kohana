<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-18 09:44:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: values ~ APPPATH\views\site\form.php [ 3 ]
2012-07-18 09:44:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: values ~ APPPATH\views\site\form.php [ 3 ]
--
#0 D:\xampp\htdocs\kohana\application\views\site\form.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 3, Array)
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
2012-07-18 09:45:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: values ~ APPPATH\views\site\form.php [ 3 ]
2012-07-18 09:45:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: values ~ APPPATH\views\site\form.php [ 3 ]
--
#0 D:\xampp\htdocs\kohana\application\views\site\form.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 3, Array)
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
2012-07-18 10:58:59 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Site as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
2012-07-18 10:58:59 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Site as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 11:15:07 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Site as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
2012-07-18 11:15:07 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Site as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 11:15:08 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Site as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
2012-07-18 11:15:08 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Site as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 11:15:08 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Site as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
2012-07-18 11:15:08 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Site as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 11:15:28 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Site as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
2012-07-18 11:15:28 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Site as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 12:01:09 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Site as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
2012-07-18 12:01:09 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Site as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 14:34:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\site\form.php [ 1 ]
2012-07-18 14:34:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\site\form.php [ 1 ]
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
2012-07-18 14:36:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\site\form.php [ 1 ]
2012-07-18 14:36:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\site\form.php [ 1 ]
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
2012-07-18 14:36:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\site\form.php [ 1 ]
2012-07-18 14:36:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\site\form.php [ 1 ]
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
2012-07-18 14:36:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\site\form.php [ 1 ]
2012-07-18 14:36:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\site\form.php [ 1 ]
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
2012-07-18 14:36:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\site\form.php [ 1 ]
2012-07-18 14:36:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\site\form.php [ 1 ]
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
2012-07-18 14:37:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\controller\site.php [ 49 ]
2012-07-18 14:37:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\controller\site.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 14:37:44 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Site as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
2012-07-18 14:37:44 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Site as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 14:37:44 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Site as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
2012-07-18 14:37:44 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Site as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 14:59:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\controller\site.php [ 115 ]
2012-07-18 14:59:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\controller\site.php [ 115 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 15:00:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\site\form.php [ 1 ]
2012-07-18 15:00:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\site\form.php [ 1 ]
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
2012-07-18 15:29:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\site\form.php [ 1 ]
2012-07-18 15:29:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\site\form.php [ 1 ]
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
2012-07-18 15:29:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\site\form.php [ 1 ]
2012-07-18 15:29:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\site\form.php [ 1 ]
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