<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        Сайт учителя
    </title>
</head>
<body>

<?php
session_start();
if (isset($_SESSION['username']))
{
    echo $_SESSION['username'];
    echo " <a href='logout.php'>Выход</a>";
    //session_destroy();
}
?>


<div>
    <h1>Регистрация</h1>
</div>
<form action="cgi.php" method="post">
    <b>Имя пользователя</b><br>
    <input name="name"><br><br>
    <b>Пароль</b><br>
    <input name="pass"><br><br>
    <b>О себе</b><br>
    <textarea rows="10" name="about"></textarea><br><br>
    <b>Пол</b><br>
    <select size=1 name="sex">
        <option value="1">Мужской</option>
        <option value="2">Женский</option>
    </select><br><br>
    <input type="submit" value="Сохранить">
</form>
</body>
</html>