<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-16 00:42:36 --- CRITICAL: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it.
 ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 59 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\PDO.php:130
2015-02-16 00:42:36 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\PDO.php(130): Kohana_Database_PDO->connect()
#1 C:\wamp\www\auconnect\modules\database\classes\Database\PDO\MySQL.php(17): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1668): Database_PDO_MySQL->list_columns('talks')
#3 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\wamp\www\auconnect\application\classes\Controller\talk.php(11): Kohana_ORM::factory('talk')
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Talk->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\PDO.php:130
2015-02-16 02:38:30 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation::factory() must be of the type array, string given, called in C:\wamp\www\auconnect\modules\orm\classes\Model\Auth\User.php on line 140 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 19 ] in C:\wamp\www\auconnect\system\classes\Kohana\Validation.php:19
2015-02-16 02:38:30 --- DEBUG: #0 C:\wamp\www\auconnect\system\classes\Kohana\Validation.php(19): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\\wamp\\www\\auc...', 19, Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Model\Auth\User.php(140): Kohana_Validation::factory('tom@gmail.com')
#2 C:\wamp\www\auconnect\modules\orm\classes\Model\Auth\User.php(164): Model_Auth_User::get_password_validation('tom@gmail.com')
#3 C:\wamp\www\auconnect\application\classes\Controller\user.php(39): Model_Auth_User->create_user('tom@gmail.com', 'tom', 'tomtom')
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_ticket()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\system\classes\Kohana\Validation.php:19
2015-02-16 02:42:33 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 02:42:33 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\auconnect\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\auconnect\application\classes\Controller\user.php(37): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_ticket()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 03:05:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\user.php [ 37 ] in file:line
2015-02-16 03:05:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-16 03:06:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\user.php [ 37 ] in file:line
2015-02-16 03:06:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-16 03:06:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\user.php [ 37 ] in file:line
2015-02-16 03:06:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-16 03:06:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1567
2015-02-16 03:06:28 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\auc...', 1567, Array)
#1 C:\wamp\www\auconnect\application\classes\Controller\user.php(40): Kohana_ORM->add('roles', Object(Model_Role))
#2 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_ticket()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1567
2015-02-16 03:07:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\user.php [ 37 ] in file:line
2015-02-16 03:07:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-16 03:07:25 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 03:07:25 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\auconnect\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\auconnect\application\classes\Controller\user.php(37): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_ticket()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 03:07:33 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 03:07:33 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\auconnect\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\auconnect\application\classes\Controller\user.php(37): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_ticket()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 03:08:24 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 03:08:24 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\auconnect\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\auconnect\application\classes\Controller\user.php(37): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_ticket()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 03:08:45 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 03:08:45 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\auconnect\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\auconnect\application\classes\Controller\user.php(37): Model_Auth_User->create_user(Array, Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_ticket()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 03:41:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH\classes\Controller\user.php [ 71 ] in C:\wamp\www\auconnect\application\classes\Controller\user.php:71
2015-02-16 03:41:43 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\user.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 71, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_enter()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\user.php:71
2015-02-16 03:44:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::login() ~ APPPATH\classes\Controller\user.php [ 64 ] in file:line
2015-02-16 03:44:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-16 03:49:30 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_User::$post ~ APPPATH\classes\Controller\user.php [ 59 ] in C:\wamp\www\auconnect\application\classes\Controller\user.php:59
2015-02-16 03:49:30 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\user.php(59): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\wamp\\www\\auc...', 59, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_enter()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\user.php:59
2015-02-16 03:50:14 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\classes\Controller\user.php [ 59 ] in file:line
2015-02-16 03:50:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-16 03:50:31 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\classes\Controller\user.php [ 59 ] in file:line
2015-02-16 03:50:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-16 03:50:33 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\classes\Controller\user.php [ 59 ] in file:line
2015-02-16 03:50:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-16 03:50:35 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\classes\Controller\user.php [ 59 ] in file:line
2015-02-16 03:50:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-16 03:54:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::login() ~ APPPATH\classes\Controller\user.php [ 73 ] in file:line
2015-02-16 03:54:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-16 03:55:37 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\classes\Controller\user.php [ 73 ] in file:line
2015-02-16 03:55:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-16 04:01:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH\classes\Controller\user.php [ 67 ] in file:line
2015-02-16 04:01:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-16 04:37:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function login() ~ APPPATH\classes\Controller\user.php [ 62 ] in file:line
2015-02-16 04:37:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-16 18:49:14 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\template.php [ 32 ] in C:\wamp\www\auconnect\application\views\template.php:32
2015-02-16 18:49:14 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\template.php(32): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\wamp\\www\\auc...', 32, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\application\views\template.php:32
2015-02-16 18:58:50 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\template.php [ 32 ] in C:\wamp\www\auconnect\application\views\template.php:32
2015-02-16 18:58:50 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\template.php(32): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\wamp\\www\\auc...', 32, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\application\views\template.php:32
2015-02-16 18:58:54 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\template.php [ 32 ] in C:\wamp\www\auconnect\application\views\template.php:32
2015-02-16 18:58:54 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\template.php(32): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\wamp\\www\\auc...', 32, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\application\views\template.php:32
2015-02-16 18:59:47 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\template.php [ 33 ] in C:\wamp\www\auconnect\application\views\template.php:33
2015-02-16 18:59:47 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\template.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\wamp\\www\\auc...', 33, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\application\views\template.php:33
2015-02-16 19:00:15 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\template.php [ 33 ] in C:\wamp\www\auconnect\application\views\template.php:33
2015-02-16 19:00:15 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\template.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\wamp\\www\\auc...', 33, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\application\views\template.php:33
2015-02-16 19:00:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\start.php [ 24 ] in C:\wamp\www\auconnect\application\views\start.php:24
2015-02-16 19:00:20 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\start.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 24, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\application\views\start.php:24
2015-02-16 19:04:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\start.php [ 24 ] in C:\wamp\www\auconnect\application\views\start.php:24
2015-02-16 19:04:29 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\start.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 24, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\application\views\start.php:24
2015-02-16 19:06:50 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 19:06:50 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\wamp\www\auconnect\application\classes\Controller\user.php(54): Kohana_ORM->save()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_ticket()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 19:08:50 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 19:08:50 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\wamp\www\auconnect\application\classes\Controller\user.php(54): Kohana_ORM->save()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_ticket()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 19:09:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\start.php [ 24 ] in C:\wamp\www\auconnect\application\views\start.php:24
2015-02-16 19:09:06 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\start.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 24, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\application\views\start.php:24
2015-02-16 19:10:00 --- CRITICAL: View_Exception [ 0 ]: The requested view user/enter could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2015-02-16 19:10:00 --- DEBUG: #0 C:\wamp\www\auconnect\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/enter')
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/enter', NULL)
#2 C:\wamp\www\auconnect\application\classes\Controller\user.php(32): Kohana_View::factory('user/enter')
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\system\classes\Kohana\View.php:137
2015-02-16 19:15:01 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 19:15:01 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\wamp\www\auconnect\application\classes\Controller\user.php(54): Kohana_ORM->save()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_ticket()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 19:15:50 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 19:15:50 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\wamp\www\auconnect\application\classes\Controller\user.php(53): Kohana_ORM->save()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_ticket()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 19:16:26 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 19:16:26 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\wamp\www\auconnect\application\classes\Controller\user.php(53): Kohana_ORM->save()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_ticket()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 19:16:34 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 19:16:34 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\wamp\www\auconnect\application\classes\Controller\user.php(53): Kohana_ORM->save()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_ticket()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 19:16:56 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 19:16:56 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\wamp\www\auconnect\application\classes\Controller\user.php(53): Kohana_ORM->save()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_ticket()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-02-16 19:52:41 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\template.php [ 33 ] in C:\wamp\www\auconnect\application\views\template.php:33
2015-02-16 19:52:41 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\template.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\wamp\\www\\auc...', 33, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\application\views\template.php:33
2015-02-16 20:22:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\start.php [ 24 ] in C:\wamp\www\auconnect\application\views\start.php:24
2015-02-16 20:22:37 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\start.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 24, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\application\views\start.php:24
2015-02-16 21:31:36 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\talk.php [ 25 ] in C:\wamp\www\auconnect\application\classes\Controller\talk.php:25
2015-02-16 21:31:36 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\talk.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\wamp\\www\\auc...', 25, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Talk->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\talk.php:25
2015-02-16 21:46:25 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\talk.php [ 25 ] in C:\wamp\www\auconnect\application\classes\Controller\talk.php:25
2015-02-16 21:46:25 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\talk.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\wamp\\www\\auc...', 25, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Talk->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\talk.php:25
2015-02-16 21:46:57 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\talk.php [ 25 ] in C:\wamp\www\auconnect\application\classes\Controller\talk.php:25
2015-02-16 21:46:57 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\talk.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\wamp\\www\\auc...', 25, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Talk->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\talk.php:25
2015-02-16 21:46:59 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\talk.php [ 25 ] in C:\wamp\www\auconnect\application\classes\Controller\talk.php:25
2015-02-16 21:46:59 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\talk.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\wamp\\www\\auc...', 25, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Talk->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\talk.php:25
2015-02-16 21:47:57 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\talk.php [ 24 ] in C:\wamp\www\auconnect\application\classes\Controller\talk.php:24
2015-02-16 21:47:57 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\talk.php(24): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\wamp\\www\\auc...', 24, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Talk->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\talk.php:24
2015-02-16 21:55:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\pages\talk.php [ 8 ] in C:\wamp\www\auconnect\application\views\pages\talk.php:8
2015-02-16 21:55:03 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\talk.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 8, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\template.php(54): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\pages\talk.php:8
2015-02-16 21:57:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\pages\talk.php [ 8 ] in C:\wamp\www\auconnect\application\views\pages\talk.php:8
2015-02-16 21:57:40 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\talk.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 8, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\template.php(54): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\pages\talk.php:8
2015-02-16 23:55:08 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\topic.php [ 29 ] in C:\wamp\www\auconnect\application\classes\Controller\topic.php:29
2015-02-16 23:55:08 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\topic.php(29): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\wamp\\www\\auc...', 29, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Topic->action_reply()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\topic.php:29
2015-02-16 23:55:46 --- CRITICAL: Kohana_Exception [ 0 ]: The user_id property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:603
2015-02-16 23:55:46 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('user_id')
#1 C:\wamp\www\auconnect\application\classes\Controller\topic.php(29): Kohana_ORM->__get('user_id')
#2 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Topic->action_reply()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:603