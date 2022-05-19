<!DOCTYPE>
<html>
<head>
    <meta charset = "UTF-8">
    <title>My site</title>
    <link rel = "stylesheet" href = "Styles/header.css">
    <link rel = "stylesheet" href = "Styles/projects.css">
    <link rel = "stylesheet" href = "Styles/text_styles.css">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>
    <div class = "wrapper">
        <?php
        include('header.php');
        ?>
        <h1 class = "c-heading-3" style = "text-align: center;">Здесь можно посмотреть на мои проекты</h1>

        <div class = "projects_show_space">
            <div class = "project_bar">
                <img img src = "images/path_tracing.png" alt = "Background">
                <h3 class = "c-heading" style = "margin-top: 27px;" >Path tracing</h3>
                <p class = "c-paragraph-1">Трассировка путей, написанная на c++ DirectX 11 без использования сторонних библиотек</p>
                <div class = "container_button_check_project">
                    <a href = "" class = "button_check_project">Check the project</a>
                </div>
            </div>

            <div class = "project_bar">
                <img img src = "images/neural_net.bmp" alt = "Background">
                <h3 class = "c-heading" style = "margin-top: 27px;" >Neural network</h3>
                <p class = "c-paragraph-1">Свёрточная (есть и развёрточная, используемая для теста сети) нейронная сеть, которые способны распознавать текст с изображения</p>
                <div class = "container_button_check_project">
                    <a href = "" class = "button_check_project">Check the project</a>
                </div>
            </div>

            <div class = "project_bar">
                <img img src = "images/game.png" alt = "Background">
                <h3 class = "c-heading" style = "margin-top: 27px;" >Game</h3>
                <p class = "c-paragraph-1">Игра, которая делалась как копия другой игры, под названием Terraria. Она недоделана и была создана для конкурса (её кстати не приняли, вероятно из-за слишком поздной подачи заявки (за пять минут до конца принятия) или недоделанности игры)</p>
                <div class = "container_button_check_project">
                    <a href = "" class = "button_check_project">Check the project</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
