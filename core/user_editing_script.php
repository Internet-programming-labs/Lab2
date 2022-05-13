<?php
    session_start();
    //require 'connect.php';
    require_once 'DB.php';
    DB::getInstance();
    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $privilege = $_POST['privilege'];
    $password = md5($_POST['password']);
    $password_confirm = md5($_POST['password_confirm']);

    $id = $_GET['id'];

    if($password === $password_confirm)
    {
        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path))
        {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../user_editing.php');
        }
        //mysqli_query($connect, "UPDATE `users` SET `full_name` = '$full_name', `login` = '$login', `email` = '$email', `password` = '$password', `avatar` = '$path', `privilege` = '$privilege' WHERE `users`.`id` = '$id'");
        DB::query("UPDATE `users` SET `full_name` = '$full_name', `login` = '$login', `email` = '$email', `password` = '$password', `avatar` = '$path', `privilege` = '$privilege' WHERE `users`.`id` = '$id'");
        header('Location: ../site_users.php');
        unset($_SESSION['message']);
    }
    else
    {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../user_editing.php');
    }