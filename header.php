<?php
    session_start();
?>

<header class = "header">
    <link rel = "stylesheet" href = "Styles/header.css">
    <div class = "header_content">
        <a class = "logo">Amnis</a>
        <nav class = "navigation">
            <ul>
                <li><a href="index.php"> Главная</a></li>
                <li><a href="about_me.php"> О себе</a></li>
                <li><a href="for_tests.php"> Моя профессия</a></li>
                <li><a href="projects.php"> Проекты</a></li>
                <li><a href="gallery.php"> Галлерея</a></li>
                <?php
                    if(!$_SESSION['user'])
                    {
                        echo
                        '
                            <li><a href="sign_in.php"> Войти</a></li>
                            <li><a href="sign_up.php"> Зарегистрироваться</a></li>
                        ';
                    }
                    else
                    {
                        echo
                        '
                            <li><a href="profile.php"> Профиль</a></li>
                        ';
                        if($_SESSION['user']['privilege'] == "admin")
                        {
                            echo
                            '
                                <li><a href="site_users.php"> Пользователи сайта</a></li>
                            ';
                        }
                    }
                ?>

            </ul>
        </nav>
    </div>

</header>