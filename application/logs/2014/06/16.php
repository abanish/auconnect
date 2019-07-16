<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-16 11:58:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH\views\welcome.php [ 4 ] in C:\wamp\www\auconnect\application\views\welcome.php:4
2014-06-16 11:58:35 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\welcome.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\auc...', 4, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\wamp\www\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(View))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\auconnect\application\views\welcome.php:4
2014-06-16 12:27:27 --- CRITICAL: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2014-06-16 12:27:27 --- DEBUG: #0 C:\wamp\www\auconnect\system\classes\Kohana\View.php(137): Kohana_View->set_filename('welcome')
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(30): Kohana_View->__construct('welcome', NULL)
#2 C:\wamp\www\auconnect\application\classes\Controller\Welcome.php(6): Kohana_View::factory('welcome')
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2014-06-16 12:27:41 --- CRITICAL: View_Exception [ 0 ]: The requested view pages/signin could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2014-06-16 12:27:41 --- DEBUG: #0 C:\wamp\www\auconnect\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/signin')
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/signin', NULL)
#2 C:\wamp\www\auconnect\application\classes\Controller\page.php(24): Kohana_View::factory('pages/signin')
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Page->action_signin()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2014-06-16 12:28:16 --- CRITICAL: View_Exception [ 0 ]: The requested view common/footer could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2014-06-16 12:28:16 --- DEBUG: #0 C:\wamp\www\auconnect\system\classes\Kohana\View.php(137): Kohana_View->set_filename('common/footer')
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(30): Kohana_View->__construct('common/footer', NULL)
#2 C:\wamp\www\auconnect\application\views\template.php(27): Kohana_View::factory('common/footer')
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\wamp\www\auc...')
#4 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\auc...', Array)
#5 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#9 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137