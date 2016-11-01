<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Редактировать страницу</title>
    <link rel="stylesheet" href="/template/bootstrap3/css/bootstrap.css">
    <link rel="stylesheet" href="/template/css/styles.css">
    <link rel="stylesheet" href="/template/css/admin.css">
</head>
<body>
<div id="wrapper">
    <h1>Редактировать страницу</h1>
    <p class="nav">
        <a href="index.php">на главную</a>
    </p>

    <h4>Удалить ноаость #<?php echo $id; ?></h4>


    <p>Вы действительно хотите удалить этот товар?</p>

    <form method="post">
        <input type="submit" name="submit" value="Удалить" />
    </form>
    </div>

</div>

</body>
</html>