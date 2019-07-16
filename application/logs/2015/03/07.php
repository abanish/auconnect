<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-07 06:42:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: msg ~ APPPATH\views\pages\enter.php [ 30 ] in C:\wamp\www\auconnect\application\views\pages\enter.php:30
2015-03-07 06:42:08 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\enter.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 30, Array)
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
2015-03-07 07:49:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\errors\404.php [ 8 ] in C:\wamp\www\auconnect\application\views\errors\404.php:8
2015-03-07 07:49:29 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\errors\404.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 8, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\application\classes\HTTP\Exception\404.php(35): Kohana_View->render()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(976): HTTP_Exception_404->get_response()
#5 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#6 {main} in C:\wamp\www\auconnect\application\views\errors\404.php:8
2015-03-07 12:20:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function html() ~ APPPATH\views\pages\talk.php [ 114 ] in file:line
2015-03-07 12:20:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-07 12:54:28 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT talk.id AS id, talk.user_id AS user_id, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk ORDER BY id DESC LIMIT 10 OFFSET -10 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-03-07 12:54:28 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', 'Model_Talk', Array)
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
2015-03-07 20:37:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\start.php [ 17 ] in C:\wamp\www\auconnect\application\views\start.php:17
2015-03-07 20:37:30 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\start.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 17, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\application\views\start.php:17
2015-03-07 20:48:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\template.php [ 44 ] in C:\wamp\www\auconnect\application\views\template.php:44
2015-03-07 20:48:16 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\template.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 44, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\classes\Controller\template\application.php(27): Kohana_Controller_Template->after()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Controller_Template_Application->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\auconnect\application\views\template.php:44
2015-03-07 21:26:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\classes\Controller\template\application.php [ 23 ] in C:\wamp\www\auconnect\application\classes\Controller\template\application.php:23
2015-03-07 21:26:40 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\template\application.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 23, Array)
#1 C:\wamp\www\auconnect\application\classes\Controller\talk.php(11): Controller_Template_Application->before()
#2 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(69): Controller_Talk->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\auconnect\application\classes\Controller\template\application.php:23
2015-03-07 21:27:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\classes\Controller\template\application.php [ 25 ] in C:\wamp\www\auconnect\application\classes\Controller\template\application.php:25
2015-03-07 21:27:17 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\template\application.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 25, Array)
#1 C:\wamp\www\auconnect\application\classes\Controller\talk.php(11): Controller_Template_Application->before()
#2 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(69): Controller_Talk->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\auconnect\application\classes\Controller\template\application.php:25
2015-03-07 21:27:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\classes\Controller\template\application.php [ 25 ] in C:\wamp\www\auconnect\application\classes\Controller\template\application.php:25
2015-03-07 21:27:18 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\template\application.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 25, Array)
#1 C:\wamp\www\auconnect\application\classes\Controller\talk.php(11): Controller_Template_Application->before()
#2 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(69): Controller_Talk->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\auconnect\application\classes\Controller\template\application.php:25
2015-03-07 22:25:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\pages\topic.php [ 189 ] in C:\wamp\www\auconnect\application\views\pages\topic.php:189
2015-03-07 22:25:37 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\topic.php(189): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 189, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\template.php(46): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\application\classes\Controller\template\application.php(41): Kohana_Controller_Template->after()
#9 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Controller_Template_Application->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\auconnect\application\views\pages\topic.php:189