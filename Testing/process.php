<?php
    session_start();
    $uploaddir = '/Users/postgres/';
    //make sure you have created the **upload** directory
    $filename    = $_FILES["picture"]["tmp_name"];
    $destination = "/Users/postgres/" . $_FILES["picture"]["name"]; 
    move_uploaded_file($filename, $destination); //save uploaded picture in your directory

    $_SESSION['user_name6'] = $destination;

    header('Location: display_picture.php');
    ?>