<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect,"SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if(mysqli_num_rows($check_user) > 0)
    {
        $user = mysqli_fetch_assoc($check_user);
        print_r($user);
        $_SESSION['user'] =
            [
                "id" => $user['id'],
                "full_name" => $user['full_name'],
                "login" => $user['login'],
                "email" => $user['email'],
                "avatar" => $user['avatar'],
                "privilege" => $user['privilege']
            ];
        header('Location: ../profile.php');
    }
    else
    {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../sign_in.php');
    }