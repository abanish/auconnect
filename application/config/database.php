<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'default' => array
	(
        'type'       => 'PDO_MySQL',
        'connection' => array(
            /**
             * The following options are available for MySQL:
             *
             * string   hostname     server hostname, or socket
             * string   database     database name
             * string   username     database username
             * string   password     database password
             * boolean  persistent   use persistent connections?
             * array    variables    system variables as "key => value" pairs
             *
             * Ports and sockets may be appended to the hostname.
             */
            'dsn'        => 'mysql:host=localhost;dbname=auconnect',
            'username'   => 'root',
            'password'   => FALSE,
            'persistent' => FALSE,


        ),
        /**
         * The following extra options are available for PDO:
         *
         * string   identifier  set the escaping identifier
         */
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
    ),



	'alternate' => array(
    'type'       => 'mysql',
    'connection' => array(
        /**
         * The following options are available for PDO:
         *
         * string   dsn         Data Source Name
         * string   username    database username
         * string   password    database password
         * boolean  persistent  use persistent connections?
         */
        'hostname'   => '127.0.0.1',
        'database'   => 'auconnect',
        'username'   => 'abanish',
        'password'   => 'youngistan',
        'persistent' => FALSE,
    ),
    'table_prefix' => '',
    'charset'      => 'utf8',
    'caching'      => FALSE,
    ),
);
