<?php
    require_once 'db.php';

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: logPage.php');
        exit();
    }

    $Id = $_POST['staffI'];
    $Name = $_POST['staffN'];
    $Email = $_POST['staffE'];
    $Password = $_POST['staffP'];
    $Department = $_POST['staffD'];

    $sql = "INSERT INTO application
    (staff_id, staff_name, email, password, department, status)
    VALUES
    ('$Id', '$Name', '$Email', '$Password', '$Department', 'Pending')
    ";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Application submitted successfully!');
                window.location.href='logPage.php';
            </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
?>
