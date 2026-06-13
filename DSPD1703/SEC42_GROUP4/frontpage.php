<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="styling.css">
    </head>
    <body>
        <form action="logPage.php" method="POST">
            <fieldset>
                <img class="header" src="utm.png" alt="utm logo"><br>
                <legend>Login Form</legend>
                <h1>Hello, user!</h1>
                <?php
                    if (isSet($_GET['error'])) {
                        echo '<div class="wColor">Wrong username or password!</div><br>';
                    }
                ?>
                Name:<br>
                <input type="text" id="nName" name="nName" value="" placeholder="Please enter name" required>
                <br>
                Password:<br>
                <input type="password" id="passW" name="passW" value="" placeholder="Please enter password" required>
                <br><br>
                <input type="submit" value="Login">
            </fieldset>
        </form>
    </body>
</html>