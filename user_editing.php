<?php
    session_start();
    //require 'core/connect.php';
    require_once 'core/DB.php';
    DB::getInstance();
    $id = $_GET['id'];
    //$check_user = mysqli_query($connect,"SELECT * FROM `users` WHERE `id` = '$id'");
    $check_user = DB::query("SELECT * FROM `users` WHERE `id` = '$id'");
    //$user = mysqli_fetch_assoc($check_user);
    $user = DB::fetch_assoc($check_user);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = "Styles/sign_in.css">
    <title>Регистрация</title>
</head>
<body>
<?php require "header.php";?>

<div class = "sing_in_form_container">
    <form class = "sing_in_form" action = <?php echo '"core/user_editing_script.php?id=' . $id . '"' ?> method = "post" enctype = "multipart/form-data">
        <label>ФИО</label>
        <input type = "text" name = "full_name" placeholder = "Введите ФИО" value = <?php echo '"' . $user['full_name'] . '"' ?>>
        <label>Логин</label>
        <input type = "text" name = "login" placeholder = "Введите логин" value = <?php echo '"' . $user['login'] . '"' ?>>
        <label>Почта</label>
        <input type = "email" name = "email" placeholder = "Введите почту" value = <?php echo '"' . $user['email'] . '"' ?>>
        <label>Изображение профиля</label>
        <input type = "file" name = "avatar">
        <label>Привилегия</label>
        <input type = "text" name = "privilege" value = <?php echo '"' . $user['privilege'] . '"' ?>>
        <label>Пароль</label>
        <input type = "password" name = "password" placeholder = "Введите пароль">
        <label>Подтверждение пароля</label>
        <input type = "password" name = "password_confirm" placeholder = "Повторите пароль">
        <button type = "submit">Редактировать</button>

        <?php
        if($_SESSION['message'])
        {
            echo ' <p class = "msg">' . $_SESSION['message'] . '</p>;';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</div>
</body>
</html>