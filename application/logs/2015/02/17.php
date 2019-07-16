<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-17 00:03:57 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\template.php [ 33 ] in C:\wamp\www\auconnect\application\views\template.php:33
2015-02-17 00:03:57 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\template.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\wamp\\www\\auc...', 33, Array)
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
2015-02-17 12:06:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::count_all() ~ APPPATH\views\pages\topic.php [ 24 ] in file:line
2015-02-17 12:06:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-17 12:16:30 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'talk_id' in 'where clause' [ SELECT talk.id AS id, talk.author AS author, talk.department AS department, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk WHERE talk_id = '35' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 12:16:30 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', false, Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\auconnect\application\classes\Controller\topic.php(42): Kohana_ORM->find()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Topic->action_interesting()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 12:17:02 --- CRITICAL: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\Controller\topic.php [ 45 ] in file:line
2015-02-17 12:17:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-17 12:17:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\Controller\topic.php [ 45 ] in file:line
2015-02-17 12:17:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-17 12:26:14 --- CRITICAL: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'auconnect.marts' doesn't exist [ SELECT * FROM marts WHERE title  ' ' ORDER BY id DESC LIMIT 15 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 12:26:14 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM m...', false, Array)
#1 C:\wamp\www\auconnect\application\classes\Model\mart.php(25): Kohana_Database_Query->execute()
#2 C:\wamp\www\auconnect\application\classes\Controller\mart.php(25): Model_Mart->get_all()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mart->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mart))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 12:26:40 --- CRITICAL: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'auconnect.marts' doesn't exist [ SELECT * FROM marts WHERE title  ' ' ORDER BY id DESC LIMIT 15 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 12:26:40 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM m...', false, Array)
#1 C:\wamp\www\auconnect\application\classes\Model\mart.php(25): Kohana_Database_Query->execute()
#2 C:\wamp\www\auconnect\application\classes\Controller\mart.php(25): Model_Mart->get_all()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mart->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mart))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 14:29:50 --- CRITICAL: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'auconnect.mines' doesn't exist [ SHOW FULL COLUMNS FROM mines ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Database\PDO\MySQL.php:17
2015-02-17 14:29:50 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Database\PDO\MySQL.php(17): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1668): Database_PDO_MySQL->list_columns('mines')
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\auconnect\application\classes\Controller\mine.php(12): Kohana_ORM::factory('mine')
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\auconnect\modules\database\classes\Database\PDO\MySQL.php:17
2015-02-17 20:01:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: talks ~ APPPATH\views\pages\mine.php [ 8 ] in C:\wamp\www\auconnect\application\views\pages\mine.php:8
2015-02-17 20:01:54 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\mine.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 8, Array)
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
#14 {main} in C:\wamp\www\auconnect\application\views\pages\mine.php:8
2015-02-17 20:02:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: talks ~ APPPATH\views\pages\mine.php [ 8 ] in C:\wamp\www\auconnect\application\views\pages\mine.php:8
2015-02-17 20:02:05 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\mine.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 8, Array)
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
#14 {main} in C:\wamp\www\auconnect\application\views\pages\mine.php:8
2015-02-17 20:14:42 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'user_id' in 'where clause' [ SELECT talk.id AS id, talk.author AS author, talk.department AS department, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk WHERE user_id = 'abanish' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 20:14:42 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', false, Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\auconnect\application\classes\Controller\mine.php(16): Kohana_ORM->find()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 20:15:19 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'username' in 'where clause' [ SELECT talk.id AS id, talk.author AS author, talk.department AS department, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk WHERE username = 'abanish' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 20:15:19 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', false, Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\auconnect\application\classes\Controller\mine.php(16): Kohana_ORM->find()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 20:15:20 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'username' in 'where clause' [ SELECT talk.id AS id, talk.author AS author, talk.department AS department, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk WHERE username = 'abanish' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 20:15:20 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', false, Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\auconnect\application\classes\Controller\mine.php(16): Kohana_ORM->find()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 20:15:21 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'username' in 'where clause' [ SELECT talk.id AS id, talk.author AS author, talk.department AS department, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk WHERE username = 'abanish' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 20:15:21 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', false, Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\auconnect\application\classes\Controller\mine.php(16): Kohana_ORM->find()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 20:15:21 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'username' in 'where clause' [ SELECT talk.id AS id, talk.author AS author, talk.department AS department, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk WHERE username = 'abanish' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-17 20:15:21 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', false, Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\auconnect\application\classes\Controller\mine.php(16): Kohana_ORM->find()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mine->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mine))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251