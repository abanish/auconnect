<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-28 22:12:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\Controller\messages.php [ 11 ] in file:line
2014-06-28 22:12:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-28 22:12:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\Controller\messages.php [ 11 ] in file:line
2014-06-28 22:12:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-28 22:12:58 --- CRITICAL: View_Exception [ 0 ]: The requested view profie/message_form could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2014-06-28 22:12:58 --- DEBUG: #0 C:\wamp\www\auconnect\system\classes\Kohana\View.php(137): Kohana_View->set_filename('profie/message_...')
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(30): Kohana_View->__construct('profie/message_...', NULL)
#2 C:\wamp\www\auconnect\application\classes\Controller\messages.php(16): Kohana_View::factory('profie/message_...')
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Messages->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messages))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2014-06-28 22:18:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Model\message.php [ 13 ] in C:\wamp\www\auconnect\application\classes\Model\message.php:13
2014-06-28 22:18:11 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Model\message.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\auc...', 13, Array)
#1 C:\wamp\www\auconnect\application\classes\Controller\messages.php(19): Model_Message->add('whatsup india.')
#2 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Messages->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messages))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\auconnect\application\classes\Model\message.php:13
2014-06-28 22:19:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Model\message.php [ 14 ] in C:\wamp\www\auconnect\application\classes\Model\message.php:14
2014-06-28 22:19:48 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Model\message.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\auc...', 14, Array)
#1 C:\wamp\www\auconnect\application\classes\Controller\messages.php(19): Model_Message->add('whatsup india.')
#2 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Messages->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messages))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\auconnect\application\classes\Model\message.php:14