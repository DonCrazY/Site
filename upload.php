<?php
//phpinfo();
if(is_uploaded_file($_FILES["file"]["tmp_name"]))
{
    move_uploaded_file($_FILES["file"]["tmp_name"], "files/".$_FILES["file"]["name"]);
}
header("Location: storage.php");