<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-20 03:10:20 --- CRITICAL: Kohana_Exception [ 0 ]: The topic property does not exist in the Model_Mart class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:603
2015-02-20 03:10:20 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('topic')
#1 C:\wamp\www\auconnect\application\views\pages\mart.php(68): Kohana_ORM->__get('topic')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#4 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\auconnect\application\views\template.php(67): Kohana_View->__toString()
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
2015-02-20 03:24:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\mine.php [ 91 ] in file:line
2015-02-20 03:24:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-20 03:31:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\pages\mine.php [ 91 ] in file:line
2015-02-20 03:31:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-20 03:46:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: talk ~ APPPATH\views\pages\mine.php [ 25 ] in C:\wamp\www\auconnect\application\views\pages\mine.php:25
2015-02-20 03:46:22 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\mine.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 25, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\template.php(67): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\pages\mine.php:25
2015-02-20 08:12:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: topic ~ APPPATH\views\pages\mine.php [ 32 ] in C:\wamp\www\auconnect\application\views\pages\mine.php:32
2015-02-20 08:12:36 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\mine.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 32, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\template.php(67): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\pages\mine.php:32
2015-02-20 21:51:35 --- CRITICAL: Kohana_Exception [ 0 ]: The user_id property does not exist in the Model_Talk class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:603
2015-02-20 21:51:35 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('user_id')
#1 C:\wamp\www\auconnect\application\classes\Controller\mine.php(32): Kohana_ORM->__get('user_id')
#2 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:603
2015-02-20 22:05:57 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'author' in 'where clause' [ SELECT talk.id AS id, talk.user_id AS user_id, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk WHERE author = 'abanish' ORDER BY id DESC ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-20 22:05:57 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', 'Model_Talk', Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\auconnect\application\classes\Controller\mine.php(16): Kohana_ORM->find_all()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-20 22:06:20 --- CRITICAL: Kohana_Exception [ 0 ]: The author property does not exist in the Model_Talk class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:702
2015-02-20 22:06:20 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('author', 'abanish')
#1 C:\wamp\www\auconnect\application\classes\Controller\talk.php(24): Kohana_ORM->__set('author', 'abanish')
#2 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Talk->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:702
2015-02-20 22:12:03 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'author' in 'where clause' [ SELECT talk.id AS id, talk.user_id AS user_id, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk WHERE author = 'abanish' ORDER BY id DESC ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-20 22:12:03 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', 'Model_Talk', Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\auconnect\application\classes\Controller\mine.php(16): Kohana_ORM->find_all()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-20 22:14:31 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'author' in 'where clause' [ SELECT talk.id AS id, talk.user_id AS user_id, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk WHERE author = 'abanish' ORDER BY id DESC ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-20 22:14:31 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', 'Model_Talk', Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\auconnect\application\classes\Controller\mine.php(16): Kohana_ORM->find_all()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-20 22:15:18 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'author' in 'where clause' [ SELECT talk.id AS id, talk.user_id AS user_id, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk WHERE author = 'abanish' ORDER BY id DESC ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-20 22:15:18 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', 'Model_Talk', Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\auconnect\application\classes\Controller\mine.php(16): Kohana_ORM->find_all()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-20 22:20:02 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'author' in 'where clause' [ SELECT talk.id AS id, talk.user_id AS user_id, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk WHERE author = 'abanish' ORDER BY id DESC ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-20 22:20:02 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', 'Model_Talk', Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\auconnect\application\classes\Controller\mine.php(16): Kohana_ORM->find_all()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-20 22:20:38 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'author' in 'where clause' [ SELECT talk.id AS id, talk.user_id AS user_id, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk WHERE author = 'abanish' ORDER BY id DESC ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-20 22:20:38 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', 'Model_Talk', Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\auconnect\application\classes\Controller\mine.php(16): Kohana_ORM->find_all()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-20 22:22:19 --- CRITICAL: Exception [ 0 ]: user is not owner of the mart. ~ APPPATH\classes\Controller\mine.php [ 33 ] in C:\wamp\www\auconnect\system\classes\Kohana\Controller.php:84
2015-02-20 22:22:19 --- DEBUG: #0 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#1 [internal function]: Kohana_Controller->execute()
#2 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#6 {main} in C:\wamp\www\auconnect\system\classes\Kohana\Controller.php:84
2015-02-20 22:23:50 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete talk model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-02-20 22:23:50 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\mine.php(33): Kohana_ORM->delete()
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\mine.php:33
2015-02-20 22:24:45 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'talk_id' in 'where clause' [ SELECT talk.id AS id, talk.user_id AS user_id, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk WHERE talk_id = '39' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-20 22:24:45 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', false, Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\auconnect\application\classes\Controller\mine.php(31): Kohana_ORM->find()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_deletemytalk()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-20 22:30:31 --- CRITICAL: Kohana_Exception [ 0 ]: The author property does not exist in the Model_Talk class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:603
2015-02-20 22:30:31 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('author')
#1 C:\wamp\www\auconnect\application\views\pages\topic.php(11): Kohana_ORM->__get('author')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#4 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\auconnect\application\views\template.php(67): Kohana_View->__toString()
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#7 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:603
2015-02-20 22:59:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: talk ~ APPPATH\views\editmodal.php [ 14 ] in C:\wamp\www\auconnect\application\views\editmodal.php:14
2015-02-20 22:59:12 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\editmodal.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 14, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\template.php(67): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\editmodal.php:14
2015-02-20 23:06:16 --- CRITICAL: Kohana_Exception [ 0 ]: The author property does not exist in the Model_Talk class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:603
2015-02-20 23:06:16 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('author')
#1 C:\wamp\www\auconnect\application\views\pages\topic.php(11): Kohana_ORM->__get('author')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#4 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\auconnect\application\views\template.php(67): Kohana_View->__toString()
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#7 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:603