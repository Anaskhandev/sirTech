<?php
// define('HOST', 'localhost');
// define('USER', 'root');
// define('PASSWORD', '');
// define('DATABASE', 'SirTech');

define('HOST','localhost');
define('USER','');
define('PASSWORD','');
define('DATABASE','thewpked_SirTech_db');



$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
$conn->set_charset('utf8');
if ($conn->connect_errno > 0) {
    die('Error in database connection: ' . $conn->connect_errno);
}
date_default_timezone_set('Asia/Karachi');