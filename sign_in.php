<?php
    session_start();
    if($_SESSION['user'])
    {
        header('Location: profile.php');
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = "Styles/sign_in.css">
    <title>Sign in</title>
</head>
<body>
    <?php require "header.php";?>

    <div class = "sing_in_form_container">
        <form class = "sing_in_form" action = "core/signin.php" method = "post">
            <label>Логин</label>
            <input type = "text" name = "login" placeholder = "Введите логин">
            <label>Пароль</label>
            <input type = "password" name = "password" placeholder = "Введите пароль">
            <button type = "submit">Войти</button>
            <?php
                if($_SESSION['message'])
                {
                    echo ' <p class = "msg">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>
    </div>
</body>
</html>