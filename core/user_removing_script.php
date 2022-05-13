<?php
    session_start();
    require 'connect.php';

    $id = $_GET['id'];
    mysqli_query($connect,"DELETE FROM `users` WHERE `users`.`id` = '$id'");
    header('Location: ../site_users.php');