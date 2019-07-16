<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-26 05:49:04 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\pages\talk.php [ 101 ] in file:line
2015-02-26 05:49:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-26 05:49:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function param() ~ APPPATH\views\pages\talk.php [ 101 ] in file:line
2015-02-26 05:49:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-26 05:58:22 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT talk.id AS id, talk.user_id AS user_id, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk ORDER BY id DESC LIMIT 10 OFFSET -10 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-26 05:58:22 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', 'Model_Talk', Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\auconnect\application\classes\Controller\talk.php(26): Kohana_ORM->find_all()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Talk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-26 06:03:19 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT talk.id AS id, talk.user_id AS user_id, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk ORDER BY id DESC LIMIT 10 OFFSET -10 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-26 06:03:19 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', 'Model_Talk', Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\auconnect\application\classes\Controller\talk.php(26): Kohana_ORM->find_all()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Talk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-26 06:03:22 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT talk.id AS id, talk.user_id AS user_id, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk ORDER BY id DESC LIMIT 10 OFFSET -10 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-26 06:03:22 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', 'Model_Talk', Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\auconnect\application\classes\Controller\talk.php(26): Kohana_ORM->find_all()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Talk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-26 06:03:54 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT talk.id AS id, talk.user_id AS user_id, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk ORDER BY id DESC LIMIT 10 OFFSET -10 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-26 06:03:54 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', 'Model_Talk', Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\auconnect\application\classes\Controller\talk.php(26): Kohana_ORM->find_all()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Talk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-26 06:03:57 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT talk.id AS id, talk.user_id AS user_id, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk ORDER BY id DESC LIMIT 10 OFFSET -10 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-26 06:03:57 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', 'Model_Talk', Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\auconnect\application\classes\Controller\talk.php(26): Kohana_ORM->find_all()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Talk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-26 06:04:49 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT talk.id AS id, talk.user_id AS user_id, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk ORDER BY id DESC LIMIT 10 OFFSET -10 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-26 06:04:49 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', 'Model_Talk', Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\auconnect\application\classes\Controller\talk.php(26): Kohana_ORM->find_all()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Talk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-26 06:04:52 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT talk.id AS id, talk.user_id AS user_id, talk.topic AS topic, talk.description AS description, talk.date AS date, talk.replies AS replies, talk.interesting AS interesting FROM talks AS talk ORDER BY id DESC LIMIT 10 OFFSET -10 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-26 06:04:52 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT talk.id ...', 'Model_Talk', Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\auconnect\application\classes\Controller\talk.php(26): Kohana_ORM->find_all()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Talk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Talk))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-02-26 19:47:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: file ~ APPPATH\classes\Controller\processupload.php [ 19 ] in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:19
2015-02-26 19:47:18 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\processupload.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\auc...', 19, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Processupload->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Processupload))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:19
2015-02-26 19:47:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: file ~ APPPATH\classes\Controller\processupload.php [ 19 ] in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:19
2015-02-26 19:47:20 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\processupload.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\auc...', 19, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Processupload->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Processupload))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:19
2015-02-26 19:47:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index: file ~ APPPATH\classes\Controller\processupload.php [ 19 ] in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:19
2015-02-26 19:47:21 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\processupload.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\auc...', 19, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Processupload->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Processupload))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:19
2015-02-26 20:11:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function normal_resize_image() ~ APPPATH\classes\Controller\processupload.php [ 73 ] in file:line
2015-02-26 20:11:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-26 20:18:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function normal_resize_image() ~ APPPATH\classes\Controller\processupload.php [ 73 ] in file:line
2015-02-26 20:18:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-26 20:28:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: file ~ APPPATH\classes\Controller\processupload.php [ 27 ] in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:27
2015-02-26 20:28:40 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\processupload.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\auc...', 27, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Processupload->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Processupload))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:27
2015-02-26 20:29:39 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\processupload.php [ 28 ] in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:28
2015-02-26 20:29:39 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\processupload.php(28): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\auc...', 28, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Processupload->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Processupload))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:28
2015-02-26 20:30:20 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\processupload.php [ 29 ] in file:line
2015-02-26 20:30:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\\wamp\\www\\auc...', 29, Array)
#1 C:\wamp\www\auconnect\application\classes\Controller\processupload.php(29): move_uploaded_file(Array, 'uploads/')
#2 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Processupload->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Processupload))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-02-26 20:32:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: image_file ~ APPPATH\classes\Controller\processupload.php [ 27 ] in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:27
2015-02-26 20:32:07 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\processupload.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\auc...', 27, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Processupload->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Processupload))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:27
2015-02-26 20:32:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: image_file ~ APPPATH\classes\Controller\processupload.php [ 27 ] in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:27
2015-02-26 20:32:22 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\processupload.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\auc...', 27, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Processupload->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Processupload))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:27
2015-02-26 20:32:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: image_file ~ APPPATH\classes\Controller\processupload.php [ 27 ] in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:27
2015-02-26 20:32:26 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\processupload.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\auc...', 27, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Processupload->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Processupload))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:27
2015-02-26 20:32:32 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\processupload.php [ 29 ] in file:line
2015-02-26 20:32:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\\wamp\\www\\auc...', 29, Array)
#1 C:\wamp\www\auconnect\application\classes\Controller\processupload.php(29): move_uploaded_file(Array, 'uploads/')
#2 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Processupload->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Processupload))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-02-26 20:33:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: file ~ APPPATH\classes\Controller\processupload.php [ 28 ] in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:28
2015-02-26 20:33:29 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\processupload.php(28): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\auc...', 28, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Processupload->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Processupload))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:28
2015-02-26 20:36:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: file ~ APPPATH\classes\Controller\processupload.php [ 28 ] in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:28
2015-02-26 20:36:03 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\processupload.php(28): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\auc...', 28, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Processupload->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Processupload))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:28
2015-02-26 20:40:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: file ~ APPPATH\classes\Controller\processupload.php [ 28 ] in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:28
2015-02-26 20:40:01 --- DEBUG: #0 C:\wamp\www\auconnect\application\classes\Controller\processupload.php(28): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\auc...', 28, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Processupload->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Processupload))
#4 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\auconnect\application\classes\Controller\processupload.php:28