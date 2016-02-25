<?php

include "config.php";

//echo $_GET['id'];
//echo $_POST['name'];

$query = "update `user` set `name`='".$_POST['name']."', `password`='".$_POST['pass']."',`about`='".$_POST['about']."',`sex`=".$_POST['sex']." where `id`=".$_GET['id'];
mysqli_query($dbConnect, $query);

echo mysqli_error($dbConnect);

header("Location: index.php");

?>