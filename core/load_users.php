<?php
    session_start();
    require_once 'core/DB.php';
    DB::getInstance();
    //require_once 'connect.php';

    //$check_user = mysqli_query($connect,"SELECT * FROM `users`");
    $check_user = DB::query("SELECT * FROM `users`");