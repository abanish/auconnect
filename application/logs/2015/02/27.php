<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-27 08:40:46 --- CRITICAL: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'auconnect.avatars' doesn't exist [ SHOW FULL COLUMNS FROM avatars ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\auconnect\modules\database\classes\Database\PDO\MySQL.php:17
2015-02-27 08:40:46 --- DEBUG: #0 C:\wamp\www\auconnect\modules\database\classes\Database\PDO\MySQL.php(17): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(1668): Database_PDO_MySQL->list_columns('avatars')
#2 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\auconnect\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\auconnect\application\classes\Controller\avatar.php(26): Kohana_ORM::factory('avatar')
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_upload()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\auconnect\modules\database\classes\Database\PDO\MySQL.php:17