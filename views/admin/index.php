<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная страница</title>
    <link rel="stylesheet" href="/template//bootstrap3/css/bootstrap.css">
    <link rel="stylesheet" href="/template//css/styles.css">
    <link rel="stylesheet" href="/template//css/admin.css">
</head>
<body>

<div id="wrapper">
    <h1>Админка</h1>
    <div class="info alert alert-success">
        Запись успешно удалена!
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Страница</th>
            <th>Редактирование</th>
            <th>Удаление</th>
        </tr>
        <tr>
            <?php foreach ($newsList  as $post): ?>
            <td><a href="/news/index/">Главная</a></td>
            <td><a href="/admin/edit/<?php echo $post['id']; ?>">редактировать</a></td>
            <td><a href="/admin/delete/<?php echo $post['id']; ?>">удалить</a></td>
            <?php endforeach; ?>
        </tr>
    </table>
    <div>
        <a href="/admin/new/" class="btn btn-danger btn-block">Новая страница</a>
    </div>
</div>

</body>
</html>


