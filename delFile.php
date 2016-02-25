<?php
unlink("files/".$_GET['file']);
header("Location: storage.php");