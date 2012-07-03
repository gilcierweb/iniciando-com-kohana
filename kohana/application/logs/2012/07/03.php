<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-03 11:22:30 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::input() must be an array, string given, called in D:\xampp\htdocs\kohana\application\views\site\form.php on line 4 and defined ~ SYSPATH\classes\kohana\form.php [ 93 ]
2012-07-03 11:22:30 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::input() must be an array, string given, called in D:\xampp\htdocs\kohana\application\views\site\form.php on line 4 and defined ~ SYSPATH\classes\kohana\form.php [ 93 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\form.php(93): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'D:\xampp\htdocs...', 93, Array)
#1 D:\xampp\htdocs\kohana\application\views\site\form.php(4): Kohana_Form::input('field_name', 'field_value', ' style="text-al...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\application\views\template.php(22): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#7 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#8 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Site))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2012-07-03 11:24:47 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::input() must be an array, string given, called in D:\xampp\htdocs\kohana\application\views\site\form.php on line 4 and defined ~ SYSPATH\classes\kohana\form.php [ 93 ]
2012-07-03 11:24:47 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::input() must be an array, string given, called in D:\xampp\htdocs\kohana\application\views\site\form.php on line 4 and defined ~ SYSPATH\classes\kohana\form.php [ 93 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\form.php(93): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'D:\xampp\htdocs...', 93, Array)
#1 D:\xampp\htdocs\kohana\application\views\site\form.php(4): Kohana_Form::input('field_name', 'field_value', ' style="text-al...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\application\views\template.php(22): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#7 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#8 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Site))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2012-07-03 11:48:03 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\site.php [ 27 ]
2012-07-03 11:48:03 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\site.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 11:48:25 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\site.php [ 27 ]
2012-07-03 11:48:25 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\site.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 11:49:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 11:49:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 11:51:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 11:51:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 11:51:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 11:51:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 11:51:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 11:51:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 11:51:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 11:51:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 11:52:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 11:52:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 11:52:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 11:52:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 11:52:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 11:52:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 11:52:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 11:52:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 11:54:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 11:54:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 11:54:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 11:54:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 11:54:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 11:54:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 11:57:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 11:57:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 11:57:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 11:57:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 11:57:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 11:57:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 11:57:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 11:57:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 11:58:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 11:58:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:03:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:03:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:03:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:03:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:03:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:03:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:06:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:06:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:06:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:06:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:06:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:06:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:07:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:07:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:07:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:07:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:07:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:07:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:08:18 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:08:18 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:08:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:08:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:09:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:09:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:09:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:09:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:09:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:09:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:09:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:09:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:10:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:10:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:10:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:10:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:10:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:10:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:10:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:10:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:10:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:10:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:12:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:12:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:12:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:12:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:12:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:12:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:14:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:14:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:15:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:15:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:15:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:15:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:15:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:15:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:15:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:15:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:15:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:15:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:16:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:16:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:16:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:16:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:16:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:16:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:17:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:17:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:17:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:17:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:17:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:17:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:17:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:17:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:17:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:17:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:17:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:17:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:17:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:17:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:19:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:19:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:19:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:19:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:19:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:19:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:20:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dado' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:20:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dado' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:23:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:23:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:23:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:23:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:23:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:23:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_Site' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:23:36 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\kohana\orm.php [ 295 ]
2012-07-03 12:23:36 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\kohana\orm.php [ 295 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:25:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 12:25:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:25:18 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\kohana\orm.php [ 295 ]
2012-07-03 12:25:18 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\kohana\orm.php [ 295 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:52:50 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\kohana\orm.php [ 295 ]
2012-07-03 12:52:50 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\kohana\orm.php [ 295 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:53:27 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\kohana\orm.php [ 295 ]
2012-07-03 12:53:27 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\kohana\orm.php [ 295 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:55:46 --- ERROR: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-07-03 12:55:46 --- STRACE: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('dados')
#4 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#5 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 D:\xampp\htdocs\kohana\application\classes\controller\site.php(27): Kohana_ORM::factory('site')
#9 [internal function]: Controller_Site->action_form_insert()
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2012-07-03 13:03:05 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\kohana\orm.php [ 295 ]
2012-07-03 13:03:05 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\kohana\orm.php [ 295 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 13:03:07 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\kohana\orm.php [ 295 ]
2012-07-03 13:03:07 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\kohana\orm.php [ 295 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 13:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-03 13:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL modules was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-03 13:06:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL modules/database was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-03 13:06:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL modules/database was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-03 13:07:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/database/guide/database ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:07:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/database/guide/database ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:07:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/database/guide/database ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:07:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/database/guide/database ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:33:21 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\kohana\orm.php [ 295 ]
2012-07-03 13:33:21 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH\orm\classes\kohana\orm.php [ 295 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 14:13:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/database/guide/database ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 14:13:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/database/guide/database ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 14:13:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
2012-07-03 14:13:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
--
#0 D:\xampp\htdocs\kohana\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 22, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Site))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-03 14:13:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
2012-07-03 14:13:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
--
#0 D:\xampp\htdocs\kohana\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 22, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Site))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-03 14:14:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
2012-07-03 14:14:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
--
#0 D:\xampp\htdocs\kohana\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 22, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Site))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-03 14:19:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
2012-07-03 14:19:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
--
#0 D:\xampp\htdocs\kohana\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 22, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Site))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-03 14:21:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\site.php [ 33 ]
2012-07-03 14:21:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\site.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 14:21:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\site.php [ 33 ]
2012-07-03 14:21:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\site.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 14:25:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\site.php [ 33 ]
2012-07-03 14:25:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\site.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 14:25:30 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\site.php [ 33 ]
2012-07-03 14:25:30 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\controller\site.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 14:29:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Site::form_insert() ~ APPPATH\classes\controller\site.php [ 28 ]
2012-07-03 14:29:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Site::form_insert() ~ APPPATH\classes\controller\site.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 14:31:36 --- ERROR: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Site class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-03 14:31:36 --- STRACE: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Site class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\model\site.php(27): Kohana_ORM->__get('request')
#1 D:\xampp\htdocs\kohana\application\classes\controller\site.php(29): Model_Site->form_insert()
#2 [internal function]: Controller_Site->action_form_insert()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 14:31:49 --- ERROR: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Site class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-03 14:31:49 --- STRACE: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Site class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\model\site.php(27): Kohana_ORM->__get('request')
#1 D:\xampp\htdocs\kohana\application\classes\controller\site.php(29): Model_Site->form_insert()
#2 [internal function]: Controller_Site->action_form_insert()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 14:32:00 --- ERROR: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Site class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-03 14:32:00 --- STRACE: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Site class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\model\site.php(27): Kohana_ORM->__get('request')
#1 D:\xampp\htdocs\kohana\application\classes\controller\site.php(29): Model_Site->form_insert()
#2 [internal function]: Controller_Site->action_form_insert()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 14:32:50 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\model\site.php [ 23 ]
2012-07-03 14:32:50 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\model\site.php [ 23 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\model\site.php(23): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\xampp\htdocs...', 23, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\site.php(29): Model_Site->form_insert()
#2 [internal function]: Controller_Site->action_form_insert()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 14:37:22 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\model\site.php [ 29 ]
2012-07-03 14:37:22 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\model\site.php [ 29 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\model\site.php(29): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\xampp\htdocs...', 29, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\site.php(29): Model_Site->form_insert()
#2 [internal function]: Controller_Site->action_form_insert()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 14:40:21 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\model\site.php [ 29 ]
2012-07-03 14:40:21 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\model\site.php [ 29 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\model\site.php(29): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\xampp\htdocs...', 29, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\site.php(29): Model_Site->form_insert()
#2 [internal function]: Controller_Site->action_form_insert()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}