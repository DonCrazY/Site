<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        Сайт чуителя
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
    <h1>Расписание</h1>
</div>
<table border>
    <tr>
        <td>Понедельник</td>
        <td>Вторник</td>
        <td>Среда</td>
        <td>Четверг</td>
        <td>Пятница</td>
    </tr>
    <tr>
        <td>
            Урок 1<br>
            Урок 2<br>
            Урок 3<br>
        </td>
        <td>
            Урок 1<br>
            Урок 2<br>
            Урок 3<br>
        </td>
        <td>
            Урок 1<br>
            Урок 2<br>
            Урок 3<br>
        </td>
        <td>
            Урок 1<br>
            Урок 2<br>
            Урок 3<br>
        </td>
        <td>
            Урок 1<br>
            Урок 2<br>
            Урок 3<br>
        </td>
    </tr>
</table>
</body>
</html>