<?php
    require_once 'db.php';

    $staff = mysqli_query($conn,"SELECT * FROM staff");
    $course = mysqli_query($conn,"SELECT * FROM training_course");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Attendance</title>
</head>
<body>
    Attendance</h2>
    <form action="attendanceProcess.php" method="POST">
        Staff:
        <select name="staff_id">

            <?php
                while($row=mysqli_fetch_assoc($staff))
                {
                    echo '<option value="'.$row['staff_id'].'">';
                    echo $row['staff_name'];
                    echo '</option>';
                }
            ?>
        </select>
        <br><br>

        Course:
        <select name="course_id">
            <?php
                while($row=mysqli_fetch_assoc($course))
                {
                    echo '<option value="'.$row['course_id'].'">';
                    echo $row['course_name'];
                    echo '</option>';
                }
            ?>
        </select>

        <br><br>
        Date:
        <input type="date" name="attendance_date">
        <br><br>

        <input type="submit" value="Save Attendance">
    </form>
    </body>
</html>