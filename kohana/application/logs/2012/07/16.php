<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-16 10:37:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adm/banner was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-16 10:37:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adm/banner was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 10:42:53 --- ERROR: ErrorException [ 1 ]: Call to undefined function site_url() ~ APPPATH\views\admin\banners.php [ 41 ]
2012-07-16 10:42:53 --- STRACE: ErrorException [ 1 ]: Call to undefined function site_url() ~ APPPATH\views\admin\banners.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 10:44:34 --- ERROR: ErrorException [ 1 ]: Call to undefined function site_url() ~ APPPATH\views\admin\banners.php [ 44 ]
2012-07-16 10:44:34 --- STRACE: ErrorException [ 1 ]: Call to undefined function site_url() ~ APPPATH\views\admin\banners.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 10:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 10:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 10:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:06:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:06:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:06:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:06:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:06:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:06:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:06:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:06:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:06:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:06:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:06:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:06:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:06:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:06:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:08:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:08:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:08:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:08:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:08:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:08:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:08:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:08:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}te()
#1 {main}
2012-07-16 11:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:20:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH\classes\controller\adm.php [ 164 ]
2012-07-16 11:20:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH\classes\controller\adm.php [ 164 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 11:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:22:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:22:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}uest->execute()
#1 {main}
2012-07-16 11:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}a_Request->execute()
#1 {main}
2012-07-16 11:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:25:44 --- ERROR: View_Exception [ 0 ]: The requested view adm/banners could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-16 11:25:44 --- STRACE: View_Exception [ 0 ]: The requested view adm/banners could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('adm/banners')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('adm/banners', NULL)
#2 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(147): Kohana_View::factory('adm/banners')
#3 [internal function]: Controller_Adm->action_banner_create()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-16 11:27:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\controller\adm.php [ 155 ]
2012-07-16 11:27:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\controller\adm.php [ 155 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(155): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 155, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 11:27:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\controller\adm.php [ 155 ]
2012-07-16 11:27:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\controller\adm.php [ 155 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(155): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 155, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 11:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}ute()
#1 {main}
2012-07-16 11:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}ocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:34:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
2012-07-16 11:34:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
--
#0 D:\xampp\htdocs\kohana\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 22, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-16 11:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:35:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
2012-07-16 11:35:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
--
#0 D:\xampp\htdocs\kohana\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 22, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-16 11:36:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
2012-07-16 11:36:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
--
#0 D:\xampp\htdocs\kohana\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 22, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-16 11:37:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
2012-07-16 11:37:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
--
#0 D:\xampp\htdocs\kohana\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 22, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-16 11:38:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
2012-07-16 11:38:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
--
#0 D:\xampp\htdocs\kohana\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 22, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-16 11:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adm/banner_create was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-16 11:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adm/banner_create was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 11:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:39:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
2012-07-16 11:39:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 22 ]
--
#0 D:\xampp\htdocs\kohana\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 22, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-16 11:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adm/bannercreate was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-16 11:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adm/bannercreate was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 11:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 11:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 11:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 11:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 11:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 11:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 11:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}est->execute()
#1 {main}
2012-07-16 11:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:44:57 --- ERROR: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 150 ]
2012-07-16 11:44:57 --- STRACE: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 150 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(150): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 150, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 11:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 11:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 11:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 11:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 11:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 11:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 11:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 12:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 12:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 12:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 12:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:42:28 --- ERROR: Kohana_Exception [ 0 ]: The banner_descricao property does not exist in the Model_Banner class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-07-16 12:42:28 --- STRACE: Kohana_Exception [ 0 ]: The banner_descricao property does not exist in the Model_Banner class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('banner_descrica...', '#')
#1 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(164): Kohana_ORM->__set('banner_descrica...', '#')
#2 [internal function]: Controller_Adm->action_banner_create()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-16 12:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 12:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 12:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 12:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 12:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 12:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 12:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 13:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 13:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 13:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 13:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 13:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 13:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 13:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 13:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:29:36 --- ERROR: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 178 ]
2012-07-16 13:29:36 --- STRACE: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 178 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(178): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 178, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 13:30:06 --- ERROR: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 178 ]
2012-07-16 13:30:06 --- STRACE: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 178 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(178): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 178, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 13:30:07 --- ERROR: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 178 ]
2012-07-16 13:30:07 --- STRACE: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 178 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(178): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 178, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 13:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 13:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 13:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:15 --- ERROR: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 178 ]
2012-07-16 13:30:15 --- STRACE: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 178 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(178): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 178, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 13:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 13:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 13:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:30:50 --- ERROR: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 178 ]
2012-07-16 13:30:50 --- STRACE: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 178 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(178): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 178, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 13:31:53 --- ERROR: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 175 ]
2012-07-16 13:31:53 --- STRACE: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 175 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(175): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 175, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 13:32:24 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given, called in D:\xampp\htdocs\kohana\application\classes\controller\adm.php on line 146 and defined ~ SYSPATH\classes\kohana\upload.php [ 129 ]
2012-07-16 13:32:24 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given, called in D:\xampp\htdocs\kohana\application\classes\controller\adm.php on line 146 and defined ~ SYSPATH\classes\kohana\upload.php [ 129 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\xampp\htdocs...', 129, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(146): Kohana_Upload::not_empty('7980Linux_Love....')
#2 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(178): Controller_Adm->_save_image('7980Linux_Love....')
#3 [internal function]: Controller_Adm->action_banner_create()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-16 13:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 13:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 13:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 13:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 13:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 13:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 13:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 13:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 13:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}ocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 13:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 13:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 13:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 13:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 13:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 13:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 13:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 13:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 13:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 13:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}est->execute()
#1 {main}
2012-07-16 13:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 13:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 13:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:41:38 --- ERROR: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 177 ]
2012-07-16 13:41:38 --- STRACE: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 177 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(177): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 177, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 13:42:17 --- ERROR: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 177 ]
2012-07-16 13:42:17 --- STRACE: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 177 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(177): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 177, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 13:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 13:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 13:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 13:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 13:45:19 --- ERROR: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 177 ]
2012-07-16 13:45:19 --- STRACE: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 177 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(177): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 177, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 14:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}est->execute()
#1 {main}
2012-07-16 14:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]hana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Koh
2012-07-16 14:35:32 --- STRACE
2012-07-16 14:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}7-16 14:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}1 {main}
2012-07-16 14:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}est->execute()
#1 {main}
2012-07-16 14:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}ana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}nt_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}#1 {main}
2012-07-16 14:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}quest))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}hana_Request->execute()
#1 {main}
2012-07-16 14:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}9): Kohana_Request->execute()
#1 {main}
2012-07-16 14:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}1 {main}
2012-07-16 14:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main} {main}64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}est->execute()
#1 {main}
2012-07-16 14:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}nal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:42:51 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\adm.php [ 177 ]
2012-07-16 14:42:51 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\adm.php [ 177 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(177): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\xampp\htdocs...', 177, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 14:43:03 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\adm.php [ 177 ]
2012-07-16 14:43:03 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\adm.php [ 177 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(177): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\xampp\htdocs...', 177, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 14:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]ande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}ocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}nal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}te()
#1 {main}
2012-07-16 14:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}ana_Request->execute()
#1 {main}
2012-07-16 14:43:17 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\adm.php [ 177 ]
2012-07-16 14:43:17 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\adm.php [ 177 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(177): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\xampp\htdocs...', 177, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 14:44:59 --- ERROR: ErrorException [ 8 ]: Undefined index: avatar ~ APPPATH\classes\controller\adm.php [ 172 ]
2012-07-16 14:44:59 --- STRACE: ErrorException [ 8 ]: Undefined index: avatar ~ APPPATH\classes\controller\adm.php [ 172 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(172): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 172, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 14:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main} {main}est->execute()
#1 {main}
2012-07-16 14:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}ana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main} {main}1 {main}
2012-07-16 14:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}1 {main}
2012-07-16 14:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}quest))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:45:16 --- ERROR: ErrorException [ 8 ]: Undefined index: avatar ~ APPPATH\classes\controller\adm.php [ 172 ]
2012-07-16 14:45:16 --- STRACE: ErrorException [ 8 ]: Undefined index: avatar ~ APPPATH\classes\controller\adm.php [ 172 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(172): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 172, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 14:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 14:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 14:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 14:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 14:59:31 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given, called in D:\xampp\htdocs\kohana\application\classes\controller\adm.php on line 146 and defined ~ SYSPATH\classes\kohana\upload.php [ 129 ]
2012-07-16 14:59:31 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given, called in D:\xampp\htdocs\kohana\application\classes\controller\adm.php on line 146 and defined ~ SYSPATH\classes\kohana\upload.php [ 129 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\xampp\htdocs...', 129, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(146): Kohana_Upload::not_empty('Como-juntar-din...')
#2 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(179): Controller_Adm->_save_image('Como-juntar-din...')
#3 [internal function]: Controller_Adm->action_banner_create()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-16 15:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 15:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}est->execute()
#1 {main}
2012-07-16 15:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 15:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 15:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 15:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}nt.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 15:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:01:23 --- ERROR: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 179 ]
2012-07-16 15:01:23 --- STRACE: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 179 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(179): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 179, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 15:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 15:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 15:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 15:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}xecute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 15:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 15:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 15:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 15:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 15:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 15:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 15:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\clie
2012-07-16 15:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}ana_Request->execute()
#1 {main}
2012-07-16 15:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 15:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 15:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]es\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:03:15 --- ERROR: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 176 ]
2012-07-16 15:03:15 --- STRACE: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 176 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(176): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 176, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 15:19:28 --- ERROR: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 176 ]
2012-07-16 15:19:28 --- STRACE: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 176 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(176): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 176, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 15:19:39 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\controller\adm.php [ 180 ]
2012-07-16 15:19:39 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\controller\adm.php [ 180 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(180): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 180, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 15:19:55 --- ERROR: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 180 ]
2012-07-16 15:19:55 --- STRACE: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 180 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(180): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 180, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 15:20:04 --- ERROR: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 180 ]
2012-07-16 15:20:04 --- STRACE: ErrorException [ 8 ]: Undefined index: banner_imagem ~ APPPATH\classes\controller\adm.php [ 180 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(180): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 180, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 15:20:19 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given, called in D:\xampp\htdocs\kohana\application\classes\controller\adm.php on line 146 and defined ~ SYSPATH\classes\kohana\upload.php [ 129 ]
2012-07-16 15:20:19 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given, called in D:\xampp\htdocs\kohana\application\classes\controller\adm.php on line 146 and defined ~ SYSPATH\classes\kohana\upload.php [ 129 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\xampp\htdocs...', 129, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(146): Kohana_Upload::not_empty('DSC_0000010.jpg')
#2 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(180): Controller_Adm->_save_image('DSC_0000010.jpg')
#3 [internal function]: Controller_Adm->action_banner_create()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-16 15:28:39 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Upload::$_FILES ~ APPPATH\classes\controller\adm.php [ 177 ]
2012-07-16 15:28:39 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Upload::$_FILES ~ APPPATH\classes\controller\adm.php [ 177 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-16 15:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 15:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 15:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 15:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 15:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:32:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:32:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:32:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:32:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 15:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 15:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:32:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:32:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:32:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:32:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:32:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 15:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]st.php [ 1126 ]
2012-07-16 15:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 15:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 15:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 15:55:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\classes\controller\adm.php [ 178 ]
2012-07-16 15:55:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\classes\controller\adm.php [ 178 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(178): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 178, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 15:57:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\classes\controller\adm.php [ 178 ]
2012-07-16 15:57:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\classes\controller\adm.php [ 178 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(178): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 178, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 15:57:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\classes\controller\adm.php [ 178 ]
2012-07-16 15:57:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\classes\controller\adm.php [ 178 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\adm.php(178): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 178, Array)
#1 [internal function]: Controller_Adm->action_banner_create()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 16:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 16:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 16:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 16:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL banner_img was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 16:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 16:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 16:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/5180-Steel-and-Nature-Textures.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 16:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/editar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 16:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/button_cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 16:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/3456-Abstract-Color-Vector-Background-.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 16:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 16:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 16:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/01_mac-book-pro-17-4gb-ram-320gb-hd-core-2-duo-+-apple-remote_grande.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 16:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 16:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/7980Linux_Love.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 16:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Carrie-Underwood-5-W3YDSIQAHA-1920x1200.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 16:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: banner_img/Beautiful-Girl-super-sexy-set1-Wallpaper-050.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}