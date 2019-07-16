<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-05 05:06:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: msg ~ APPPATH\views\pages\enter.php [ 30 ] in C:\wamp\www\auconnect\application\views\pages\enter.php:30
2015-03-05 05:06:33 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\enter.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 30, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\start.php(23): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\pages\enter.php:30
2015-03-05 05:06:42 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-03-05 05:06:42 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\wamp\www\auconnect\application\classes\Controller\user.php(58): Kohana_ORM->save()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_ticket()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-03-05 06:20:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: msg ~ APPPATH\views\pages\enter.php [ 30 ] in C:\wamp\www\auconnect\application\views\pages\enter.php:30
2015-03-05 06:20:25 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\enter.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 30, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\start.php(23): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\pages\enter.php:30
2015-03-05 06:25:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: msg ~ APPPATH\views\pages\enter.php [ 30 ] in C:\wamp\www\auconnect\application\views\pages\enter.php:30
2015-03-05 06:25:09 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\enter.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 30, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\start.php(23): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\pages\enter.php:30
2015-03-05 06:30:22 --- CRITICAL: ErrorException [ 1 ]: Call to a member function resize() on a non-object ~ APPPATH\classes\Controller\avatar.php [ 68 ] in file:line
2015-03-05 06:30:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 06:30:52 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\wamp\www\auconnect\application\classes\Controller\avatar.php:70
2015-03-05 06:30:52 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\avatar.php(70): Kohana_Image->save('C:\\wamp\\www\\auc...')
#1 C:\wamp\www\auconnect\application\classes\Controller\avatar.php(22): Controller_Avatar->_save_image(Array)
#2 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\auconnect\application\classes\Controller\avatar.php:70
2015-03-05 17:48:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: mart ~ APPPATH\views\pages\mart.php [ 80 ] in C:\wamp\www\auconnect\application\views\pages\mart.php:80
2015-03-05 17:48:22 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\mart.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 80, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\template.php(58): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mart))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\pages\mart.php:80
2015-03-05 19:24:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: talk ~ APPPATH\views\pages\talk.php [ 143 ] in C:\wamp\www\auconnect\application\views\pages\talk.php:143
2015-03-05 19:24:21 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\talk.php(143): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 143, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\template.php(58): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\pages\talk.php:143
2015-03-05 19:24:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::count_all() ~ APPPATH\views\pages\talk.php [ 143 ] in file:line
2015-03-05 19:24:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 19:25:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::count_all() ~ APPPATH\views\pages\talk.php [ 146 ] in file:line
2015-03-05 19:25:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 19:25:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::count_all() ~ APPPATH\views\pages\talk.php [ 146 ] in file:line
2015-03-05 19:25:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 19:44:11 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT talk.id AS id, talk.user_id AS user_id, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk ORDER BY id DESC LIMIT 10 OFFSET -10 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-03-05 19:44:11 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', 'Model_Talk', Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\auconnect\application\classes\Controller\talk.php(27): Kohana_ORM->find_all()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Talk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-03-05 20:31:22 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete mart model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:43
2015-03-05 20:31:22 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(43): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemymart()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:43
2015-03-05 20:38:42 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-05 20:38:42 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-05 20:38:56 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-05 20:38:56 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-05 20:54:48 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:32
2015-03-05 20:54:48 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(32): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:32
2015-03-05 20:54:56 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:32
2015-03-05 20:54:56 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(32): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:32
2015-03-05 21:14:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: text ~ APPPATH\classes\Controller\topic.php [ 42 ] in C:\wamp\www\auconnect\application\classes\Controller\topic.php:42
2015-03-05 21:14:06 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\topic.php(42): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\auc...', 42, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Topic->action_reply()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\topic.php:42
2015-03-05 21:24:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: text ~ APPPATH\classes\Controller\topic.php [ 45 ] in C:\wamp\www\auconnect\application\classes\Controller\topic.php:45
2015-03-05 21:24:42 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\topic.php(45): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\auc...', 45, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Topic->action_reply()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\topic.php:45
2015-03-05 21:24:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: text ~ APPPATH\classes\Controller\topic.php [ 45 ] in C:\wamp\www\auconnect\application\classes\Controller\topic.php:45
2015-03-05 21:24:48 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\topic.php(45): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\auc...', 45, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Topic->action_reply()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\topic.php:45
2015-03-05 21:24:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: text ~ APPPATH\classes\Controller\topic.php [ 45 ] in C:\wamp\www\auconnect\application\classes\Controller\topic.php:45
2015-03-05 21:24:53 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\topic.php(45): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\auc...', 45, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Topic->action_reply()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\topic.php:45
2015-03-05 21:25:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: text ~ APPPATH\classes\Controller\topic.php [ 45 ] in C:\wamp\www\auconnect\application\classes\Controller\topic.php:45
2015-03-05 21:25:02 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\topic.php(45): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\auc...', 45, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Topic->action_reply()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\topic.php:45
2015-03-05 21:25:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: text ~ APPPATH\classes\Controller\topic.php [ 45 ] in C:\wamp\www\auconnect\application\classes\Controller\topic.php:45
2015-03-05 21:25:22 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\topic.php(45): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\auc...', 45, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Topic->action_reply()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\topic.php:45
2015-03-05 21:25:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: text ~ APPPATH\classes\Controller\topic.php [ 45 ] in C:\wamp\www\auconnect\application\classes\Controller\topic.php:45
2015-03-05 21:25:48 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\topic.php(45): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\auc...', 45, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Topic->action_reply()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\topic.php:45
2015-03-05 21:50:21 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT talk.id AS id, talk.user_id AS user_id, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk ORDER BY id DESC LIMIT 10 OFFSET -10 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-03-05 21:50:21 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', 'Model_Talk', Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\auconnect\application\classes\Controller\talk.php(28): Kohana_ORM->find_all()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Talk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-03-05 23:13:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\Controller\topic.php [ 12 ] in file:line
2015-03-05 23:13:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 23:13:54 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\Controller\topic.php [ 12 ] in file:line
2015-03-05 23:13:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 23:14:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\Controller\topic.php [ 12 ] in file:line
2015-03-05 23:14:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-05 23:14:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\Controller\topic.php [ 12 ] in file:line
2015-03-05 23:14:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line