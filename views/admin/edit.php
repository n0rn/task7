<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Редактировать страницу</title>
    <link rel="stylesheet" href="/template//bootstrap3/css/bootstrap.css">
    <link rel="stylesheet" href="/template//css/styles.css">
    <link rel="stylesheet" href="/template//css/admin.css">
</head>
<body>
<div id="wrapper">
    <h1>Редактировать страницу</h1>
    <p class="nav">
        <a href="index.php">на главную</a>
    </p>

    <?php
    $succsess = "Запись успешно сохранена!";
    $error =  "Ошибка сохранения записи!";

    if(!empty($_POST['id']) || !empty($_POST['title']) || !empty($_POST['text'])){
        echo '<div class="info alert alert-success">' . $succsess . '</div>';
    }else{
        echo  '<div class="info alert alert-danger">' . $error . '</div>';
    }

    ?>

    <div>
        <form action="" method="POST">
            <?php foreach($updateNews as $itemNews) :?>
                <p><input class="form-control" name="id" placeholder="Номер страницы"><?php echo itemNews['id'];?></p>
                <p><input class="form-control"  name="title" placeholder="Название страницы"><?php echo itemNews['title'];?></p>

                <p><textarea class="form-control" name="text" placeholder="Текст страницы"><?php echo itemNews['post'];?></textarea></p>
                <p><input type="submit" name="submit" class="btn btn-danger btn-block" value="Сохранить"></p>
            <?php endforeach;?>
        </form>
    </div>

</div>

</body>
</html>


