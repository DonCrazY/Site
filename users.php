<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        Сайт учителя
    </title>
</head>
<body>
<div>
    <h1>Пользователи</h1>
</div>
<table border>
    <tr>
        <th>Id</th>
        <th>Имя</th>
        <th>Пароль</th>
        <th>О себе</th>
        <th>Пол</th>
    </tr>

    <?php

    $users = mysqli_query($dbConnect, "select * from `user`");
    while ($row = mysqli_fetch_array($users)) {
        ?>
        <tr>
            <td>
                <?php
                echo $row[0];
                ?>
            </td>
            <td>
                <?php
                echo $row[1];
                ?>
            </td>
            <td>
                <?php
                echo $row[2];
                ?>
            </td>
            <td>
                <?php
                echo $row[3];
                ?>
            </td>
            <td>
                <?php
                if ($row[4] == 1)
                    echo "Мужской";
                else echo "Женский";
                ?>
            </td>
            <td>
                <a href="update.php?id=<?php echo $row[0]; ?>&name=<?php echo $row[1]; ?>&pass=<?php echo $row[2]; ?>&about=<?php echo $row[3]; ?>&sex=<?php echo $row[4]; ?>">Редактировать</a>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $row[0]; ?>">Удалить</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>