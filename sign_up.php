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
    <form class = "sing_in_form" action = "" method = "">
        <label>ФИО</label>
        <input type = "text" placeholder = "Введите ФИО">
        <label>Логин</label>
        <input type = "text" placeholder = "Введите логин">
        <label>Почта</label>
        <input type = "email" placeholder = "Введите почту">
        <label>Пароль</label>
        <input type = "password" placeholder = "Введите пароль">
        <label>Подтверждение пароля</label>
        <input type = "password" placeholder = "Повторите пароль">
        <button>Войти</button>
    </form>
</div>
</body>
</html>