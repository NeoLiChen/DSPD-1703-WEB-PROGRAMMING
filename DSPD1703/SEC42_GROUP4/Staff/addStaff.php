<?php
    session_start();
    require_once '../db.php';

    if (isSet($_SESSION['nName'])){
        header('../logPage.php')
        exit();
    }

    $Id = $_POST['staffI'];
    $Name = $_POST['staffN'];
    $Email = $_POST['staffE'];
    $Password = $_POST['staffP'];
    $Department = $_POST['staffD'];

    $sqlC1 = "INSERT INTO staff VALUES ('$Id', '$Name', '$Email', '$Password', '$Department')";

    if (mysqli_query($conn, $sqlC1)) {
        header('Location: ../homePage.php?status=added');
        exit();
    } else {
        die('Error.');
    }
?>