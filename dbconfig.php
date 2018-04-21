<?php
define('DB_SERVER', 'localhost:3306');
/*define('DB_USERNAME', 'root');    // DB username
define('DB_PASSWORD', '');    // DB password
define('DB_DATABASE', 'nutantech');     */ // DB name
define('DB_USERNAME', 'nutantec_papa');    // DB username
define('DB_PASSWORD', 'shailesh@123');    // DB password
define('DB_DATABASE', 'nutantec_technutan');     // DB name
//$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
//$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");


$connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
