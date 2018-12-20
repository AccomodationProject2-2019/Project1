<?php
//Define constants for database connection
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'rent_a_house');
// connect to MYSQL:
// set a link variable to $dbc
$dbc =@mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to Mysql: '. mysqli_connect_error() );
//Set the encoding
mysqli_set_charset($dbc, 'utf8');
// do not include a closing php tag.
