<?php
    session_start();
    if(!$_SESSION['user'])
    {
        header('Location: sign_in.php');
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = "Styles/profile.css">
    <title>Sign in</title>
</head>
<body>
<?php require "header.php";?>

<!--<h1 style = "text-align: center;">Профиль</h1>-->
<div class = "sing_in_form_container">
        <img src="<?=$_SESSION['user']['avatar']?>" witdh = "100" alt="avatar">
        <h2><?=$_SESSION['user']['full_name']?></h2>
        <div class = "userInformation_container">
            <div class = "userinfo_element">
                <p>Логин: </p>
                <p href = ""><?=$_SESSION['user']['login']?></p>
            </div>
            <div class = "userinfo_element">
                <p>Почта: </p>
                <a href = ""><?=$_SESSION['user']['email']?></a>
            </div>
            <div class = "userinfo_element">
                <p>Привилегия: </p>
                <a href = "">
                    <?php
                        if($_SESSION['user']['privilege'] == NULL)
                        {
                            echo 'Нету';
                        }
                        else
                        {
                            echo $_SESSION['user']['privilege'];
                        }
                    ?>
                </a>
            </div>
        </div>
        <div class = "logout_buttons">
            <a class = "logout" href = "core/logout.php">Выйти из аккаута</a>
        </div>
</div>
</body>
</html>