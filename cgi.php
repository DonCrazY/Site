<?php

$doc = file_get_contents("index.html");
$docs = explode("<span id='result'></span>", $doc);

echo $docs[0];

echo "<i><b>".$_POST['name']." успешно ";
if ($_POST['sex']==1) echo "зарегистрирован!</b></i>";
else echo "заргистрирована!</b></i>";

echo $docs[1];

?>