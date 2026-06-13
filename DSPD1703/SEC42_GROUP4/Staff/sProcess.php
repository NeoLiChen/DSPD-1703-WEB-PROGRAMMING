<?php
    session_start();

    if (!isSet($_SESSION['nName'])){
        header('Location: ../frontpage.php?notLoggedIn=Log In First');
        exit();
    }
    if (isSet(($_POST['addS']))) {
        header('Location: sHomePage.php');
        exit();
    } else if (isSet(($_POST['deleteS']))) {
        
    } else if (isSet(($_POST['displayS']))) {

    } else 
        header('Location: ../mainPage.html');

?>