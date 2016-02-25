<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        Сайт учителя
    </title>
    <style type="text/css">
        #header {
            height: 40px
        }
    </style>
</head>
<body>

<?php
function authenticate() {
    header('WWW-Authenticate: Basic realm="Test Authentication System"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Необходимо авторизоваться в системе";
    exit;
}

if (!isset($_SERVER['PHP_AUTH_USER']) || ($_POST['SeenBefore'] == 1 && $_POST['OldAuth'] == $_SERVER['PHP_AUTH_USER'])) {
    authenticate();
} else {

    include "config.php";

    $query = "select * from `user` where `name` = '" . $_SERVER['PHP_AUTH_USER'] . "'";

    $user = mysqli_fetch_array(mysqli_query($dbConnect, $query));

    if (md5($_SERVER['PHP_AUTH_PW']) != $user[2]) {

        authenticate();
    }

    echo "<p>Добро пожаловать: " . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . "<br />";
    echo "<form action='' method='post'>\n";
    echo "<input type='hidden' name='SeenBefore' value='1' />\n";
    echo "<input type='hidden' name='OldAuth' value=\"" . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . "\" />\n";
    echo "<input type='submit' value='Авторизоваться повторно' />\n";
    echo "</form></p>\n";
}
?>

<?php
session_start();
if (isset($_SESSION['username']))
{
    echo $_SESSION['username'];
    echo " <a href='logout.php'>Выход</a>";
    //session_destroy();
}
else{
    ?>

    <div id="login">
        <form action="session.php" method="post">
            <input type="text" name="name" placeholder="Имя">
            <input type="password" name="pass" placeholder="Пароль">
            <input type="submit" value="Вход">
        </form>
    </div>
<?php } ?>

<div>
    <h1 id="header">Сайт учителя</h1>
</div>


<!--<div id="login">-->
<!--    <form action="login.php" method="post">-->
<!--        <input type="text" placeholder="Имя" name="name"><br>-->
<!--        <input type="password" placeholder="Пароль" name="pass"><br>-->
<!--        <input type="submit" value="Вход">-->
<!--    </form>-->
<!--</div>-->

<span id='result'></span>

<div>
    <ul>
        <li><a href="reg.php">Регистрация</a></li>
        <li><a href="raspis.php">Расписание</a></li>
        <li><a href="users.php">Пользователи</a> </li>
        <li><a href="storage.php">Файловое хранилище</a> </li>
        <!--<li><a href="basicHTTP.php">Базова HTTP-аутентификация</a> </li>-->
        <!--<li><a href="">Аутентификация на механизме сеансов</a> </li>-->
    </ul>
</div>
<div>
    <img src="1.jpg" width="200">
</div>
</body>
</html>