<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-04 10:15:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
2012-07-04 10:15:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
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
2012-07-04 10:15:44 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Site class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-04 10:15:44 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Site class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\site\list.php(7): Kohana_ORM->__get('title')
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
2012-07-04 10:17:45 --- ERROR: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Site class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-04 10:17:45 --- STRACE: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Site class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\site\list.php(15): Kohana_ORM->__get('id')
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
2012-07-04 10:17:46 --- ERROR: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Site class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-04 10:17:46 --- STRACE: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Site class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\site\list.php(15): Kohana_ORM->__get('id')
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
2012-07-04 10:17:46 --- ERROR: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Site class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-04 10:17:46 --- STRACE: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Site class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\site\list.php(15): Kohana_ORM->__get('id')
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
2012-07-04 10:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog/form was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-04 10:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog/form was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 10:57:27 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
2012-07-04 10:57:27 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(50): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\xampp\htdocs...', 50, Array)
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 10:58:53 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
2012-07-04 10:58:53 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(50): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\xampp\htdocs...', 50, Array)
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 11:01:50 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
2012-07-04 11:01:50 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(50): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\xampp\htdocs...', 50, Array)
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 11:03:24 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 11:03:24 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(55): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 11:06:32 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 11:06:32 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(56): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 11:06:35 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 11:06:35 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(56): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 11:07:34 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
2012-07-04 11:07:34 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(50): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\xampp\htdocs...', 50, Array)
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 12:09:12 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
2012-07-04 12:09:12 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(50): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\xampp\htdocs...', 50, Array)
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 13:53:44 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
2012-07-04 13:53:44 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(50): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\xampp\htdocs...', 50, Array)
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 13:54:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Site::$uri ~ APPPATH\classes\controller\site.php [ 52 ]
2012-07-04 13:54:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Site::$uri ~ APPPATH\classes\controller\site.php [ 52 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(52): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 52, Array)
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:02:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\site.php [ 52 ]
2012-07-04 14:02:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\site.php [ 52 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 52, Array)
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:02:30 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
2012-07-04 14:02:30 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(50): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\xampp\htdocs...', 50, Array)
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:02:31 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
2012-07-04 14:02:31 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(50): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\xampp\htdocs...', 50, Array)
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:02:34 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
2012-07-04 14:02:34 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(50): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\xampp\htdocs...', 50, Array)
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:02:41 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
2012-07-04 14:02:41 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(50): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\xampp\htdocs...', 50, Array)
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:02:43 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
2012-07-04 14:02:43 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_delete() ~ APPPATH\classes\controller\site.php [ 50 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(50): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\xampp\htdocs...', 50, Array)
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-04 14:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:04:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Site::$uri ~ APPPATH\classes\controller\site.php [ 33 ]
2012-07-04 14:04:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Site::$uri ~ APPPATH\classes\controller\site.php [ 33 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(33): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 33, Array)
#1 [internal function]: Controller_Site->action_form()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:06:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::segment() ~ APPPATH\classes\controller\site.php [ 33 ]
2012-07-04 14:06:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::segment() ~ APPPATH\classes\controller\site.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-04 14:07:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-04 14:07:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-04 14:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-04 14:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-04 14:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-04 14:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-04 14:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-04 14:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:13:06 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\site\form.php [ 1 ]
2012-07-04 14:13:06 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\site\form.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-04 14:15:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-04 14:15:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:15:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-04 14:15:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-04 14:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/15 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-04 14:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/15 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:16:12 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_deletes() ~ APPPATH\classes\controller\site.php [ 50 ]
2012-07-04 14:16:12 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Site::action_deletes() ~ APPPATH\classes\controller\site.php [ 50 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(50): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\xampp\htdocs...', 50, Array)
#1 [internal function]: Controller_Site->action_deletes()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:16:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\site.php [ 52 ]
2012-07-04 14:16:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\site.php [ 52 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 52, Array)
#1 [internal function]: Controller_Site->action_deletes()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:17:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-04 14:17:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:17:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-04 14:17:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:17:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-04 14:17:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:17:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-04 14:17:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:18:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\site.php [ 56 ]
2012-07-04 14:18:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\site.php [ 56 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 56, Array)
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:19:16 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:19:16 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:19:17 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:19:17 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:19:34 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:19:34 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:19:51 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:19:51 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:20:28 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:20:28 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(56): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:20:29 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:20:29 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(56): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:20:29 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:20:29 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(56): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:23:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-04 14:23:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dados' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-04 14:27:33 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:27:33 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:27:40 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:27:40 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:27:47 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:27:47 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:27:50 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:27:50 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:27:56 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:27:56 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-04 14:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL site/delete/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-04 14:30:52 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:30:52 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:31:44 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:31:44 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:31:45 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:31:45 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:31:45 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:31:45 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:32:24 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:32:24 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:32:31 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:32:31 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:36:41 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:36:41 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(58): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:37:21 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:37:21 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(58): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:37:22 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:37:22 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(58): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:37:22 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:37:22 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(58): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:37:23 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:37:23 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(58): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:43:45 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:43:45 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(58): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:44:03 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:44:03 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(58): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:44:35 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:44:35 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(58): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:44:35 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:44:35 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(58): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:44:36 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:44:36 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(58): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:44:41 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:44:41 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(58): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:44:47 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:44:47 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(58): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:46:39 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:46:39 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:46:46 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:46:46 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:51:48 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:51:48 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:51:51 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:51:51 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:53:59 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:53:59 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:54:03 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:54:03 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 14:54:08 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 14:54:08 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 15:00:42 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 15:00:42 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 15:00:43 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 15:00:43 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 15:00:43 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 15:00:43 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 15:01:02 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 15:01:02 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 15:02:21 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 15:02:21 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-04 15:02:26 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-07-04 15:02:26 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete site model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\site.php(57): Kohana_ORM->delete()
#1 [internal function]: Controller_Site->action_deletar()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Site))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}