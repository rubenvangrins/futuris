<?php

   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');

   /* Windows */
   define('DB_PASSWORD', '');

   /* Mac */
   // define('DB_PASSWORD', 'root');

   define('DB_DATABASE', 'futuris');

   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   // Check connection
	if ($db->connect_error) {
	   die("Connection failed: " . $db->connect_error);
	}

?>
