<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = "Styles/gallery.css">
    <title>Галлерея</title>
</head>
<body>
<?php require "header.php"; ?>
    <div class ="gallery_container">
        <div class = "gallery">
            <button class = "leftFlipButton" onclick = "flipLeft()">Влево</button>
            <div id = "galleryImage"></div>
            <!--<img id = "galleryImage" src = "images/galleryImages/0.jpg" alt = "galleryImage">-->
            <button class = "leftFlipButton" onclick = "flipRight()">Вправо</button>
        </div>
    </div>
    <script src = "scripts/jquery-3.6.0.js"></script>
    <script src = "scripts/gallery.js"></script>
</body>
</html>