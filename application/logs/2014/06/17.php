<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-17 21:13:11 --- CRITICAL: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2014-06-17 21:13:11 --- DEBUG: #0 C:\wamp\www\auconnect\system\classes\Kohana\View.php(137): Kohana_View->set_filename('welcome')
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(30): Kohana_View->__construct('welcome', NULL)
#2 C:\wamp\www\auconnect\application\classes\Controller\Welcome.php(6): Kohana_View::factory('welcome')
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2014-06-17 21:23:34 --- CRITICAL: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2014-06-17 21:23:34 --- DEBUG: #0 C:\wamp\www\auconnect\system\classes\Kohana\View.php(137): Kohana_View->set_filename('welcome')
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(30): Kohana_View->__construct('welcome', NULL)
#2 C:\wamp\www\auconnect\application\classes\Controller\Welcome.php(6): Kohana_View::factory('welcome')
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2014-06-17 21:51:39 --- CRITICAL: View_Exception [ 0 ]: The requested view template/generic could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2014-06-17 21:51:39 --- DEBUG: #0 C:\wamp\www\auconnect\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template/generi...')
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(30): Kohana_View->__construct('template/generi...', NULL)
#2 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template/generi...')
#3 C:\wamp\www\auconnect\application\classes\Controller\template\application.php(16): Kohana_Controller_Template->before()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(69): Controller_Template_Application->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2014-06-17 21:52:47 --- CRITICAL: View_Exception [ 0 ]: The requested view template/application could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2014-06-17 21:52:47 --- DEBUG: #0 C:\wamp\www\auconnect\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template/applic...')
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(30): Kohana_View->__construct('template/applic...', NULL)
#2 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template/applic...')
#3 C:\wamp\www\auconnect\application\classes\Controller\template\application.php(16): Kohana_Controller_Template->before()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(69): Controller_Template_Application->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2014-06-17 21:55:21 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\wamp\www\auconnect\system\classes\Kohana\Cookie.php:67
2014-06-17 21:55:21 --- DEBUG: #0 C:\wamp\www\auconnect\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\wamp\www\auconnect\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\auconnect\system\classes\Kohana\Cookie.php:67
2014-06-17 21:56:36 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\wamp\www\auconnect\system\classes\Kohana\Cookie.php:67
2014-06-17 21:56:36 --- DEBUG: #0 C:\wamp\www\auconnect\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\wamp\www\auconnect\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\auconnect\system\classes\Kohana\Cookie.php:67
2014-06-17 21:59:44 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\wamp\www\auconnect\system\classes\Kohana\Cookie.php:67
2014-06-17 21:59:44 --- DEBUG: #0 C:\wamp\www\auconnect\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\wamp\www\auconnect\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\auconnect\system\classes\Kohana\Cookie.php:67
2014-06-17 21:59:45 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\wamp\www\auconnect\system\classes\Kohana\Cookie.php:67
2014-06-17 21:59:45 --- DEBUG: #0 C:\wamp\www\auconnect\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\wamp\www\auconnect\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\auconnect\system\classes\Kohana\Cookie.php:67
2014-06-17 21:59:46 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\wamp\www\auconnect\system\classes\Kohana\Cookie.php:67
2014-06-17 21:59:46 --- DEBUG: #0 C:\wamp\www\auconnect\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\wamp\www\auconnect\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\auconnect\system\classes\Kohana\Cookie.php:67