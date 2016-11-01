<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Новая страница</title>
    <link rel="stylesheet" href="/template/bootstrap3/css/bootstrap.css">
    <link rel="stylesheet" href="/template/css/styles.css">
    <link rel="stylesheet" href="/template/css/admin.css">
</head>
<body>
<div id="wrapper">
    <h1>Новая страница</h1>
    <p class="nav">
        <a href="index.php">на главную админки</a>
    </p>
    <div>
        <form action="" method="POST">
            <?php foreach($newsList as $itemNews) :?>
            <p><input class="form-control" placeholder="Номер страницы"><?php echo itemNews['id'];?></p>
            <p><input class="form-control" placeholder="Название страницы"><?php echo itemNews['title'];?></p>

            <p><textarea class="form-control" placeholder="Текст страницы"><?php echo itemNews['post'];?></textarea></p>
            <p><input type="submit" class="btn btn-danger btn-block" value="Сохранить"></p>
            <?php endforeach;?>
        </form>
    </div>

</div>

</body>
</html>


