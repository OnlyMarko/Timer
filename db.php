<?php 
define('HOST', 'db_host');
define('USER', 'db_user');
define('PASSWORD', 'db_pass');
define('DB', 'db_name');
$link = mysqli_connect(HOST,USER,PASSWORD,DB) or die("Error timer $link" . mysqli_error($link));
?>