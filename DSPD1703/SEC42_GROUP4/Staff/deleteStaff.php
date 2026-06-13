<?php
    require_once 'db.php';

    if (!isset($conn)) {
        header("Location: ../homePage.php");
        exit();
    }

    function case2($conn) {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: ../logPage.php');
            exit();
        }

        if (!isset($_POST['staffI'])) {
            echo "No Staff ID provided";
            exit();
        }

        $Id = $_POST['staffI'];

        $sqlC2 = "DELETE FROM staff WHERE staff_id = '$Id'";

        if (mysqli_query($conn, $sqlC2)) {
            $GLOBALS['delete'] = case2($conn);
            echo 'Deleted successfully';    
            header('Location: ../homePage.php');
        } else {
            echo 'Error: '.mysqli_error($conn);
        }
    }
?>