<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'db_store');

//* APPROOT
define('APPROOT', dirname(dirname(__FILE__)));

//* URLROOT
define('URLROOT', $_SERVER['DOCUMENT_ROOT'] . '/ramonda');
define('ROOT', 'http://localhost/ramonda');
define('ASSETS_URL', 'http://localhost/ramonda/public');
define('ASSETS_SRC', $_SERVER['DOCUMENT_ROOT'] . '/ramonda/public');

//* SITENAME
define('SITENAME', 'Ramonda');