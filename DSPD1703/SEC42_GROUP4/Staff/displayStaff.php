<?php
    require_once 'db.php';

    if (!isset($conn)) {
        header("Location: ../homePage.php");
        exit();
    } else
        echo 'Connected. Please wait... ';

    function case3($conn) {
        $sqlC3 = "SELECT * FROM staff";
        $qryC3 = (mysqli_query($conn, $sqlC3));   

        if (!$qryC3) 
            die('Error.');
        return $qryC3;
    }
?>