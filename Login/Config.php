<?php
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'mysql');
   define('DB_PASSWORD', 'mysql');
   define('DB_DATABASE', 'Wedding');
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>