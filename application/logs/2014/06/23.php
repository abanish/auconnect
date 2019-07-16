<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-23 11:03:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\account\signin.php [ 5 ] in C:\wamp\www\auconnect\application\views\account\signin.php:5
2014-06-23 11:03:29 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\account\signin.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\auc...', 5, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\wamp\www\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\template.php(57): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\wamp\www\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\account\signin.php:5
2014-06-23 11:10:46 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\user.php [ 15 ] in C:\wamp\www\auconnect\application\classes\Controller\user.php:15
2014-06-23 11:10:46 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\user.php(15): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\wamp\www\auc...', 15, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\user.php:15
2014-06-23 11:11:21 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\user.php [ 15 ] in C:\wamp\www\auconnect\application\classes\Controller\user.php:15
2014-06-23 11:11:21 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\user.php(15): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\wamp\www\auc...', 15, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\user.php:15
2014-06-23 11:12:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\account\signin.php [ 5 ] in C:\wamp\www\auconnect\application\views\account\signin.php:5
2014-06-23 11:12:53 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\account\signin.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\auc...', 5, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\wamp\www\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\application\classes\Controller\user.php(16): Kohana_Response->body(Object(View))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_add()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\auconnect\application\views\account\signin.php:5
2014-06-23 11:14:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\account\signin.php [ 5 ] in C:\wamp\www\auconnect\application\views\account\signin.php:5
2014-06-23 11:14:57 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\account\signin.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\auc...', 5, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\wamp\www\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\application\classes\Controller\user.php(16): Kohana_Response->body(Object(View))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_add()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\auconnect\application\views\account\signin.php:5