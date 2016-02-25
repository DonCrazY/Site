<?php

include "config.php";

//$query = "insert into 'user' ('name', 'password', 'about', 'sex') values ('".$_POST['name']."', '".$_POST['pass']."', '".$_POST['about']."', '".$_POST['sex']."')";

$pass = md5($_POST['pass']);

$query = "insert into `user` (`name`, `password`, `about`, `sex`) values ('".$_POST['name']."', '".$pass."', '".$_POST['about']."', ".$_POST['sex'].")";
//echo $query;

mysqli_query($dbConnect, $query);
echo mysqli_error($dbConnect);

$doc = file_get_contents("index.php");
$docs = explode("<span id='result'></span>", $doc);

echo $docs[0];

echo "<i><b>".$_POST['name']." успешно ";
if ($_POST['sex']==1) echo "зарегистрирован!</b></i>";
else echo "заргистрирована!</b></i>";

echo $docs[1];

?>