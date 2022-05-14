<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = "Styles/negative_image_page.css">
    <title>Негатив</title>
</head>
<body>
    <?php require_once 'header.php'; ?>
    <!--<h1>Hello!</h1>-->
    <!--<img src = "negative_image.php">-->

    <div class = "images_container">
        <div class = "loaded_image">
            <h1>Загруженное изображение</h1>
            <img src = "<?=$_SESSION['image']?>">
            <form class = "loadImage_form" action = "core/loadImageToFilter.php" method = "post"  enctype = "multipart/form-data">
                <input type = "file" id = "file" name = "image">
                <div class = "label_container">
                    <label for = "file" class = "file_label">Выбрать файл</label>
                </div>
                <div class = "button_container">
                    <button type = "submit">Загрузить</button>
                </div>
            </form>
        </div>
        <div class = "changed_image">
            <h1>Изменённые изображение</h1>
            <img src =
                 <?php
                    if($_SESSION['image'])
                    {
                        echo '"negative_image.php"';
                    }
                    else
                    {
                        echo '';
                    }
                    ?>>
            <!--<img src = "0.jpg">-->
            <!--
            <form class = "loadImage_form" action = "core/loadImageToFilter.php" method = "post"  enctype = "multipart/form-data">
                <button type = "submit">Обработать загруженное изображение</button>
            </form>
            -->
        </div>
    </div>
</body>
</html>