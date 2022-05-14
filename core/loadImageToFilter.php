<?php
session_start();
$file = $_FILES['image'];

/*
$path = 'uploads/imagesToNegative/' . $file['name'];
move_uploaded_file($file['tmp_name'], '../' . $path);
*/

$path = 'uploads/imagesToNegative/' . time() . $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], '../' . $path);
$_SESSION['image'] = $path;

header('Location: ../negative_image_page.php?image=' . $path);