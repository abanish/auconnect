<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-30 03:50:20 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\topic.php [ 21 ] in file:line
2014-06-30 03:50:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-30 03:50:51 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\topic.php [ 21 ] in file:line
2014-06-30 03:50:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-30 03:52:17 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\topic.php [ 21 ] in file:line
2014-06-30 03:52:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-30 03:54:05 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\topic.php [ 21 ] in file:line
2014-06-30 03:54:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-30 03:54:26 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\topic.php [ 21 ] in file:line
2014-06-30 03:54:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-30 03:54:43 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Controller\topic.php [ 21 ] in file:line
2014-06-30 03:54:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-30 06:41:52 --- CRITICAL: View_Exception [ 0 ]: The requested view page/talk could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2014-06-30 06:41:52 --- DEBUG: #0 C:\wamp\www\auconnect\system\classes\Kohana\View.php(137): Kohana_View->set_filename('page/talk')
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(30): Kohana_View->__construct('page/talk', NULL)
#2 C:\wamp\www\auconnect\application\classes\Controller\topic.php(28): Kohana_View::factory('page/talk')
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Topic->action_get_talks()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2014-06-30 06:46:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\pages\talk.php [ 158 ] in file:line
2014-06-30 06:46:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-30 06:48:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\pages\talk.php [ 158 ] in file:line
2014-06-30 06:48:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-30 06:51:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\pages\talk.php [ 149 ] in C:\wamp\www\auconnect\application\views\pages\talk.php:149
2014-06-30 06:51:43 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\talk.php(149): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\auc...', 149, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\wamp\www\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\template.php(57): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\wamp\www\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\pages\talk.php:149
2014-06-30 07:18:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: talks ~ APPPATH\views\pages\talk.php [ 152 ] in C:\wamp\www\auconnect\application\views\pages\talk.php:152
2014-06-30 07:18:05 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\talk.php(152): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\auc...', 152, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\wamp\www\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\template.php(57): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\wamp\www\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\pages\talk.php:152
2014-06-30 07:28:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: talks ~ APPPATH\views\pages\talk.php [ 150 ] in C:\wamp\www\auconnect\application\views\pages\talk.php:150
2014-06-30 07:28:23 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\talk.php(150): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\auc...', 150, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\wamp\www\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\template.php(57): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\wamp\www\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\pages\talk.php:150