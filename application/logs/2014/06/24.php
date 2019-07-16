<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-24 06:17:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\account\signin.php [ 5 ] in C:\wamp\www\auconnect\application\views\account\signin.php:5
2014-06-24 06:17:10 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\account\signin.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\auc...', 5, Array)
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
2014-06-24 06:19:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\account\signin.php [ 5 ] in C:\wamp\www\auconnect\application\views\account\signin.php:5
2014-06-24 06:19:45 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\account\signin.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\auc...', 5, Array)
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