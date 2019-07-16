<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-27 04:35:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\account\signin.php [ 8 ] in C:\wamp\www\auconnect\application\views\account\signin.php:8
2014-09-27 04:35:32 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\account\signin.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\auc...', 8, Array)
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
#12 {main} in C:\wamp\www\auconnect\application\views\account\signin.php:8
2014-09-27 04:40:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\account\signin.php [ 8 ] in C:\wamp\www\auconnect\application\views\account\signin.php:8
2014-09-27 04:40:39 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\account\signin.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\auc...', 8, Array)
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
#12 {main} in C:\wamp\www\auconnect\application\views\account\signin.php:8