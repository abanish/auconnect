<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-04 06:11:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: interest ~ APPPATH\views\pages\topic.php [ 13 ] in C:\wamp\www\auconnect\application\views\pages\topic.php:13
2015-03-04 06:11:01 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\topic.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 13, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\template.php(58): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\pages\topic.php:13
2015-03-04 06:11:44 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant disabled - assumed 'disabled' ~ APPPATH\views\pages\topic.php [ 13 ] in C:\wamp\www\auconnect\application\views\pages\topic.php:13
2015-03-04 06:11:44 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\topic.php(13): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\wamp\\www\\auc...', 13, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\template.php(58): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\pages\topic.php:13
2015-03-04 06:27:37 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\wamp\www\auconnect\application\classes\Controller\topic.php:24
2015-03-04 06:27:37 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\topic.php(24): Kohana_ORM->find()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Topic->action_id()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\topic.php:24
2015-03-04 15:11:01 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH\views\pages\mine.php [ 30 ] in C:\wamp\www\auconnect\application\views\pages\mine.php:30
2015-03-04 15:11:01 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\mine.php(30): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\wamp\\www\\auc...', 30, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\template.php(58): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\pages\mine.php:30
2015-03-04 15:12:18 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete mart model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:43
2015-03-04 15:12:18 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(43): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemymart()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:43
2015-03-04 15:12:29 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete mart model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:43
2015-03-04 15:12:29 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(43): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemymart()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:43
2015-03-04 15:17:12 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete mart model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:43
2015-03-04 15:17:12 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(43): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemymart()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:43
2015-03-04 15:23:23 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete mart model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:43
2015-03-04 15:23:23 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(43): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemymart()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:43
2015-03-04 15:45:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: talks ~ APPPATH\views\pages\mine.php [ 8 ] in C:\wamp\www\auconnect\application\views\pages\mine.php:8
2015-03-04 15:45:20 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\mine.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 8, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\template.php(58): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\pages\mine.php:8
2015-03-04 15:46:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: talks ~ APPPATH\views\pages\mine.php [ 8 ] in C:\wamp\www\auconnect\application\views\pages\mine.php:8
2015-03-04 15:46:01 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\mine.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 8, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\template.php(58): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\pages\mine.php:8
2015-03-04 15:46:44 --- CRITICAL: Kohana_Exception [ 0 ]: The author property does not exist in the Model_Talk class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:603
2015-03-04 15:46:44 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('author')
#1 C:\wamp\www\auconnect\application\views\pages\mine.php(24): Kohana_ORM->__get('author')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#4 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\auconnect\application\views\template.php(58): Kohana_View->__toString()
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#7 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:603
2015-03-04 16:09:46 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:09:46 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:09:53 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:09:53 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:10:00 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:10:00 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:10:01 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:10:01 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:10:27 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:10:27 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:10:55 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:10:55 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:10:55 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:10:55 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:10:55 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:10:55 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:10:56 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:10:56 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:10:56 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:10:56 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:11:32 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:11:32 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:11:32 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:11:32 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:12:28 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:12:28 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:12:28 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:12:28 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:12:29 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:12:29 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:12:29 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:12:29 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:12:29 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:12:29 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:12:29 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:12:29 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:12:29 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:12:29 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:12:29 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:12:29 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:13:35 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:13:35 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:13:35 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:13:35 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:14:16 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:14:16 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:14:16 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:14:16 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:14:16 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:14:16 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:14:59 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:14:59 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:15:00 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:15:00 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:15:00 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:15:00 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:15:08 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:15:08 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:15:08 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:15:08 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:39:36 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:39:36 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:39:41 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:39:41 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:39:42 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:39:42 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:39:42 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:39:42 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:39:42 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:39:42 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:40:37 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 16:40:37 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-03-04 17:00:54 --- CRITICAL: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Mart class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:603
2015-03-04 17:00:54 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('user')
#1 C:\wamp\www\auconnect\application\views\pages\mart.php(107): Kohana_ORM->__get('user')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#4 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\auconnect\application\views\template.php(58): Kohana_View->__toString()
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#7 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mart))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:603
2015-03-04 17:23:37 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-03-04 17:23:37 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\wamp\www\auconnect\application\classes\Controller\user.php(56): Kohana_ORM->save()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_ticket()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-03-04 21:19:39 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-03-04 21:19:39 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\wamp\www\auconnect\application\classes\Controller\user.php(56): Kohana_ORM->save()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_ticket()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-03-04 21:29:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: msg ~ APPPATH\views\pages\enter.php [ 29 ] in C:\wamp\www\auconnect\application\views\pages\enter.php:29
2015-03-04 21:29:02 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\enter.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 29, Array)
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
#14 {main} in C:\wamp\www\auconnect\application\views\pages\enter.php:29