<?php
/*
this file contains database configution assuming you are running my sql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');
// define('DB_EMAIL', 'email')

// Try connecting to database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check the connection 
if($conn == false){
    dir('Error: cannot connect');
}


?>