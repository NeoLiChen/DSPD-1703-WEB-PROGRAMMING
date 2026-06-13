<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: frontpage.php?error=not_post");
        exit();
    }

    $nName = $_POST['nName'];
    $passW = $_POST['passW'];

    if ($nName === "group4" && $passW === "section42") {
        $_SESSION['nName'] = $nName;
        $_SESSION['passW'] = $passW;
        
        header("Location: main.php");
        exit();
    } else {
        header("Location: frontpage.php?error=login_error");
        exit();
    }