<?php

ob_start();
session_start();

define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','bank-system');

     $con=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD)or die(mysqli_error());
     $db_select=mysqli_select_db($con,DB_NAME) or die(mysqli_error());


?>