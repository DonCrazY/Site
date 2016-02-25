<?php
rename("files/".$_POST["oldname"], "files/".$_POST["newname"]);
header("Location: storage.php");