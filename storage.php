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
    <h1>Файловое хранилище</h1>
</div>
<form enctype="multipart/form-data" method="post" action="upload.php">
    <input type="file" name="file">
    <input type="submit" value="Отправить">
</form>
<br>
<table border>
    <tr>
        <th>Имя</th>
        <th>Дата изменения</th>
        <th>Размер</th>
        <th>Просмотр</th>
        <th>Переименовать</th>
    </tr>
    <?php
    $files = scandir("files/");
    foreach ($files as $filename) {
        ?>
        <tr>
            <td><?php echo $filename ?></td>
            <td><?php echo date("d.m.Y H:i", filemtime("files/" . $filename)); ?></td>
            <td><?php echo filesize("files/" . $filename); ?></td>
            <td>
                <?php
                $type = explode(".", $filename);
                $t = $type[count($type) - 1];
                if ($t=="jpg" || $t=="jpeg" || $t=="bmp" || $t=="png" || $t=="gif")
                {
                    ?>
                    <img src="files/<?php echo $filename; ?>" width="200">
                <?php
                }
                else echo $t;
                ?>
            </td>
            <td>
                <form method="post" action="rename.php">
                    <input type="text" name="newname">
                    <input type="hidden" name="oldname" value="<?php echo $filename ?>">
                    <input type="submit" value="ОК">
                </form>
            </td>
            <td>
                <a href="delFile.php?file=<?php echo $filename; ?>">Удалить</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>