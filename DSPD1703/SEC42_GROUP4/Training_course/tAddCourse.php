<?php
    require_once '../db.php';

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: ../logPage.php');
        exit();
    }

    $CourseId = $_POST['courseI'];
    $CourseName = $_POST['courseN'];
    $Description = $_POST['desc'];
    $TrainingDate = $_POST['tDate'];
    $StaffId = $_POST['staffI'];

    $sqlC1 = "INSERT INTO training_course VALUES ('$CourseId', '$CourseName', '$Description', '$TrainingDate', '$StaffId')";

    if (mysqli_query($conn, $sqlC1)) {
        header('Location: ../homePage.php?status=added');
        exit();
    } else {
        die('Error.');
    }
?>