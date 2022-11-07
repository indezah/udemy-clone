<?php

// print_r($_SERVER);
define('APP_NAME', 'Udemy App');
define('APP_DESC', 'Tutorial App');



if ($_SERVER['SERVER_NAME'] == 'localhost') {

    define('DBHOST', 'localhost');
    define('DBNAME', 'udemy_db');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', 'mysql');
} else {
    define('DBHOST', 'localhost');
    define('DBNAME', 'udemy_db');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', 'mysql');
}
