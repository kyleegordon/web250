<?php
/* Database credentials */

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'C1nder666');
define('DB_NAME', 'web250');

/* Attempt to connect to MySQL database */
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}