<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'db_store');
define('DB_PORT', 3306);

//* APPROOT
define('APPROOT', dirname(dirname(__FILE__)));

//* URLROOT
define('URL', 'http://localhost/ramonda/public');
define('URLROOT', $_SERVER['DOCUMENT_ROOT'] . '/ramonda');
define('ROOT', 'http://localhost/ramonda');
define('ASSETS_URL', 'http://localhost/ramonda/public');
define('ASSETS_SRC', $_SERVER['DOCUMENT_ROOT'] . '/ramonda/public');

//* SITENAME
define('SITENAME', 'Ramonda');

//* LOGOTIPI
define('LOGO_SVG', ROOT . '/public/img/ramonda.svg');
define('LOGO_PNG', ROOT . '/public/img/ramonda2.png');
define('AVATAR', ROOT . '/public/img/avatar.png');
define('UPLOADS', 'http://localhost/ramonda/public');