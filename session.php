<?php

include "config.php";

$query = "select * from `user` where `name` = '" . $_POST['name'] . "'";

$user = mysqli_fetch_array(mysqli_query($dbConnect, $query));

//echo $user['2'];

if (md5($_POST['pass']) == $user[2]) {

    session_start();

    $_SESSION['username'] = $_POST['name'];
    echo $_SESSION['username'];
    header("Location: index.php");
}

?>