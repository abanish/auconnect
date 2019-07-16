<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-02 16:35:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: talks ~ APPPATH\views\pages\talk.php [ 150 ] in C:\wamp\www\auconnect\application\views\pages\talk.php:150
2014-07-02 16:35:35 --- DEBUG: #0 C:\wamp\www\auconnect\application\views\pages\talk.php(150): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\auc...', 150, Array)
#1 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\wamp\www\auc...')
#2 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\auc...', Array)
#3 C:\wamp\www\auconnect\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\auconnect\application\views\template.php(57): Kohana_View->__toString()
#5 C:\wamp\www\auconnect\system\classes\Kohana\View.php(61): include('C:\wamp\www\auc...')
#6 C:\wamp\www\auconnect\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\auc...', Array)
#7 C:\wamp\www\auconnect\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\auconnect\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Topic))
#11 C:\wamp\www\auconnect\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\auconnect\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\auconnect\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\auconnect\application\views\pages\talk.php:150
2014-07-02 16:45:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function add() on a non-object ~ APPPATH\classes\Controller\topic.php [ 24 ] in file:line
2014-07-02 16:45:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-02 16:46:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function add() on a non-object ~ APPPATH\classes\Controller\topic.php [ 24 ] in file:line
2014-07-02 16:46:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line