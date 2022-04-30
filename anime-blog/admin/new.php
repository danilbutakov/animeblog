<?php
session_start();
$mysqli = new mysqli('localhost', 'dan', '1234', 'anime-blog');

if (mysqli_connect_errno()) {
    printf('Соединение не установлено', mysqli_error());
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminka</title>
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div style="text-align: center;">
        <h1>Редактирование контактной информации</h1>
        <?php if (!empty($_SESSION['login'])) : ?>

            <?php echo "Добрый день, " . $_SESSION['login']; ?><br>
            <a href="logout.php">Выйти</a><br>

        <?php else :
            echo '<h2>Вы что хакер?</h2>';
            echo '<a href="/../admin.php">На главную</a>';
        ?>
        <?php endif ?>
        <?php $sql = $mysqli->query("SELECT * FROM `new`");
        $sql->execute();
        $res2 = $sql->fetch_assoc(); ?>
        <form action="" method="post">
            <input type="text" name="info_genre" value="<?php echo $res->info_genre ?>">
            <input type="text" name="info_date" value="<?php echo $res->info_date ?>">
            <input type="text" name="title" value="<?php echo $res->title ?>">
            <input type="text" name="description" value="<?php echo $res->description ?>">
            <input type="text" name="read_info" value="<?php echo $res->read_info ?>">
        </form>
    </div>
</body>

</html>