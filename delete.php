<?php
include "config.php";

$query = "delete from `user` where id=".$_GET['id'];
mysqli_query($dbConnect, $query);

header("Location: index.php");

?>