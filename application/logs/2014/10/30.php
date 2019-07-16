<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-30 19:07:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\views\template.php [ 37 ] in file:line
2014-10-30 19:07:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-30 19:07:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\views\template.php [ 37 ] in file:line
2014-10-30 19:07:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-30 19:07:32 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\template.php [ 49 ] in C:\wamp\www\auconnect\application\views\template.php:49
2014-10-30 19:07:32 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\template.php(49): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\auc...', 49, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\wamp\www\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\application\views\template.php:49
2014-10-30 19:07:33 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\template.php [ 49 ] in C:\wamp\www\auconnect\application\views\template.php:49
2014-10-30 19:07:33 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\template.php(49): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\auc...', 49, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\wamp\www\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\application\views\template.php:49