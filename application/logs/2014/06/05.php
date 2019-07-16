<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-05 03:46:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH\views\welcome.php [ 4 ] in C:\wamp\www\auconnect\application\views\welcome.php:4
2014-06-05 03:46:20 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\welcome.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\auc...', 4, Array)
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
2014-06-05 03:50:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH\views\welcome.php [ 4 ] in C:\wamp\www\auconnect\application\views\welcome.php:4
2014-06-05 03:50:53 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\welcome.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\auc...', 4, Array)
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
2014-06-05 05:00:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH\views\welcome.php [ 4 ] in C:\wamp\www\auconnect\application\views\welcome.php:4
2014-06-05 05:00:15 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\welcome.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\auc...', 4, Array)
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