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
    <h1>Редактирование</h1>
</div>
<form action="save.php?id=<?php echo $_GET['id']; ?>" method="post">
    <b>Имя пользователя</b><br>
    <input name="name" value="<?php echo $_GET['name']; ?>"><br><br>
    <b>Пароль</b><br>
    <input name="pass" value="<?php echo $_GET['pass']; ?>"><br><br>
    <b>О себе</b><br>
    <textarea rows="10" name="about"><?php echo $_GET['about']; ?></textarea><br><br>
    <b>Пол</b><br>
    <select size=1 name="sex"  value="<?php echo $_GET['sex']; ?>">
        <option value="1" <?php if($_GET['sex']==1) echo "selected"; ?> >Мужской</option>
        <option value="2" <?php if($_GET['sex']==2) echo "selected"; ?> >Женский</option>
    </select><br><br>
    <input type="submit" value="Сохранить">
</form>
</body>
</html>