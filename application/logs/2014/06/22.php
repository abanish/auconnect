<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-22 21:52:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\user.php [ 18 ] in C:\wamp\www\auconnect\application\classes\Controller\user.php:18
2014-06-22 21:52:37 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\user.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\auc...', 18, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\user.php:18
2014-06-22 21:53:38 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be an array, string given, called in C:\wamp\www\auconnect\application\classes\Model\champ.php on line 22 and defined ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Insert.php [ 80 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query\Builder\Insert.php:80
2014-06-22 21:53:38 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query\Builder\Insert.php(80): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\wamp\www\auc...', 80, Array)
#1 C:\wamp\www\auconnect\application\classes\Model\champ.php(22): Kohana_Database_Query_Builder_Insert->values('email', 'password')
#2 C:\wamp\www\auconnect\application\classes\Controller\user.php(18): Model_Champ->what('email', 'password')
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query\Builder\Insert.php:80
2014-06-22 21:55:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\user.php [ 18 ] in C:\wamp\www\auconnect\application\classes\Controller\user.php:18
2014-06-22 21:55:21 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\user.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\auc...', 18, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\user.php:18
2014-06-22 21:57:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\user.php [ 18 ] in C:\wamp\www\auconnect\application\classes\Controller\user.php:18
2014-06-22 21:57:18 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\user.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\auc...', 18, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\user.php:18