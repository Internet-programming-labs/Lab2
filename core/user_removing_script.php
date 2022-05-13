<?php
    session_start();
    //require 'connect.php';
    require_once 'DB.php';
    DB::getInstance();

    $id = $_GET['id'];
    //mysqli_query($connect,"DELETE FROM `users` WHERE `users`.`id` = '$id'");
    DB::query("DELETE FROM `users` WHERE `users`.`id` = '$id'");
    header('Location: ../site_users.php');