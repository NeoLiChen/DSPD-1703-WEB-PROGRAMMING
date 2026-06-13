<?php
    session_start();
    require_once '../db.php';

    if (isSet($_SESSION['nName'])){
        header('../logPage.php')
        exit();

    function case3($conn) {
        $sqlC3 = "SELECT * FROM staff";
        $qryC3 = (mysqli_query($conn, $sqlC3));   

        if (!$qryC3) 
            die('Error.');
        return $qryC3;
    }
?>