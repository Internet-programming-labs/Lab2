<?php
    session_start();
    require_once 'connect.php';

    $check_user = mysqli_query($connect,"SELECT * FROM `users`");
