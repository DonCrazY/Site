<?php

mb_internal_encoding("UTF-8");

//echo mb_internal_encoding();

$dbHost = "localhost";
$dbName = "site";
$dbUser = "root";
$dbPass = "89093176aa";

$dbConnect = mysqli_connect($dbHost, $dbUser, $dbPass);
mysqli_select_db($dbConnect, $dbName);
mysqli_set_charset($dbConnect, "UTF8");

echo mysqli_error($dbConnect);

?>