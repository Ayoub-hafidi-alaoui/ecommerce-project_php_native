<?php
define('SERVERNAME', 'localhost');
define('SERVERUSER', 'root');
define('SERVERPASSWORD', 'root');
define('DBNAME', 'ecommerce');

$connection = mysqli_connect(SERVERNAME, SERVERUSER, SERVERPASSWORD,  DBNAME);

?>