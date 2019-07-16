<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-06 05:25:24 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-03-06 05:25:24 --- DEBUG: #0 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\wamp\www\auconnect\application\classes\Controller\user.php(60): Kohana_ORM->save()
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_User->action_ticket()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php:1302
2015-03-06 05:59:38 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT mart.id AS id, mart.title AS title, mart.description AS description, mart.user_id AS user_id, mart.price AS price, mart.contact AS contact, mart.date AS date FROM marts AS mart ORDER BY id DESC LIMIT 10 OFFSET -10 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-03-06 05:59:38 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT mart.id ...', 'Model_Mart', Array)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO_MySQL))
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\auconnect\application\classes\Controller\mart.php(17): Kohana_ORM->find_all()
#4 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Mart->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mart))
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\auconnect\modules\database\classes\Kohana\Database\Query.php:251
2015-03-06 19:02:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\template.php [ 14 ] in C:\wamp\www\auconnect\application\views\template.php:14
2015-03-06 19:02:08 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\template.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 14, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\classes\Controller\template\application.php(27): Kohana_Controller_Template->after()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Controller_Template_Application->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\auconnect\application\views\template.php:14
2015-03-06 19:02:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\template.php [ 89 ] in C:\wamp\www\auconnect\application\views\template.php:89
2015-03-06 19:02:56 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\template.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\auc...', 89, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\classes\Controller\template\application.php(27): Kohana_Controller_Template->after()
#5 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Controller_Template_Application->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Settings))
#8 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\auconnect\application\views\template.php:89