<?php
    require_once '../db.php';

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: ../logPage.php");
        exit();
    }
    
    $StaffId = $_POST['staff_id'];

    if (!isset($conn)) {
        header("Location: ../homePage.php");
        exit();
    }

    $qry = mysqli_query($conn, "SELECT * FROM training_course WHERE staff_id = '$StaffId'");
    if (!$qry) {
        header('Location: ../main.php');
        exit();
    } else
        header('Location: tHomePage.php');
?>
