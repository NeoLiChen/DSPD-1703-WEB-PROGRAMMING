<?php
    require_once 'db.php';

    $result = mysqli_query($conn, "SELECT * FROM training_course");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Apply Training Course</title>
</head>
<body>
<h2>Apply Training Course</h2>
<form action="processApplication.php" method="POST">
    Staff ID:
    <input type="text" name="staff_id" required><br><br>

    Course:

    <select name="course_id">

        <?php
            while($row = mysqli_fetch_assoc($result))
            {
                echo '<option value="'.$row['course_id'].'">';
                echo $row['course_name'];
                echo '</option>';
            }
        ?>

    </select>
    <br><br>
    <input type="submit" value="Apply">
    </form>
</body>
</html>