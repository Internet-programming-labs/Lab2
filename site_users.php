<?php
    session_start();
    require 'core/load_users.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = "Styles/site_users.css">
    <title>Список пользователей</title>
</head>
<body>
<?php require "header.php";?>
<h1 class = "users_table_heading">Пользователи сайта</h1>
<div class = "users_table_container">
    <table class = "users_table">
        <tr>
            <th>Логин</th>
            <th>Почта</th>
            <th>ФИО</th>
            <th>Привилегия</th>
            <th>Аватар</th>
            <th>Операции</th>
        </tr>

        <?php
        $users_count = mysqli_num_rows($check_user);
        for($i = 0; $i < $users_count; $i++)
        {
            $user = mysqli_fetch_assoc($check_user);
            echo
            '
                <tr>
                <td> ' . $user["login"] . '</td>
                <td> ' . $user["email"] . '</td>
                <td> ' . $user["full_name"] . '</td>
                <td> ' . $user["privilege"] . '</td>
                <td> <img src = "' . $user["avatar"] . '"></td>
                <td>
                    <div class = "operations">
                        <a class = "edit" href = ' . "\"user_editing.php?id=" . $user['id'] . "\"" .'>Редактировать</a>
                        <a class = "remove" href = ' . "\"core/user_removing_script.php?id=" . $user['id'] . "\"" .'>Удалить</a>
                    </div>
                </td>
                </tr>
            ';
        }
        ?>
    </table>
</div>
<pre>
    <?php
    /*
        $users_count = mysqli_num_rows($check_user);
        for($i = 0; $i < $users_count; $i++)
        {
            $user = mysqli_fetch_assoc($check_user);
        }
    */
    ?>
</pre>
</body>
</html>