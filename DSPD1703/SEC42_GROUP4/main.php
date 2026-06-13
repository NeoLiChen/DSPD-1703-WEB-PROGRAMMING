<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Staff Training System</title>
    <link rel="stylesheet" href="styling2.css">
</head>
<body style="background: #8F1106";>
    <h1>Welcome to Staff Training System</h1>
    <div class="row">
        <div>
            <h3>List of Staff:</h3>
            <a href="homePage.php"><img src="staffPicture.jpg" width="95px" height="93px" alt="Staff Picture"></a>
        </div>
        <div>
            <h3>Staff Application:</h3>
            <a href="appForm.php"><img src="app.jpg" width="100px" height="130px" alt="Staff Application Picture"></a>
        </div>
    </div>
    <div class="row">
        <div>
            <h3>Staff Training Course:</h3>
            <a href="trainingCourse.php"><img src="tCourse.webp" width="161px" height="86px" alt="Staff Training Course Picture"></a>
        </div>   
        <div>
            <h3>Staff Attendance:</h3>
            <a href="att.php"><img src="atd.jpg" width="120px" height="120px" alt="Staff Attendance Picture"></a>
        </div> 
    </div>    
</body>
</html>