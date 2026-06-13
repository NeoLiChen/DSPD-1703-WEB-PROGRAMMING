<?php
    $serverName = 'localhost';
    $userName = 'g04sec42';
    $passWord = 'g04s42stsdb';
    $dataBase = 'STS42';

    $conn = mysqli_connect($serverName, $userName, $passWord, $dataBase);

    if (!isset($conn)) {
        header("Location: ../homePage.php");
        exit();
    } else
        echo 'Connected. Please wait...<br><br>';

    function case3($conn) {
        $sqlC3 = "SELECT * FROM training_course";
        $qryC3 = (mysqli_query($conn, $sqlC3));   

        if (!$qryC3) 
            die('Error.');
        return $qryC3;
    }
?>