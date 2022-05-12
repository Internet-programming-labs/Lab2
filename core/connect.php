<?php

    $connect = mysqli_connect('localhost', 'root', '', 'ip_lab4_registration');

    if(!$connect)
    {
        die('Error connect to database');
    }