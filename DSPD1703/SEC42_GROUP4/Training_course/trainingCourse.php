<?php
    require_once '../db.php';

    $result = mysqli_query($conn, "SELECT * FROM training_course");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Apply Training Course</title>
</head>
<body>
<h2>Apply Training Course</h2>
<form action="tCourseForm.php" method="POST">
    Staff ID:
    <input type="number" name="staff_id" required><br><br>
    
    <?php
        echo 'Training Course:<br><br>'; // Training Course List
        echo '<form action="tAddCourse.php" method="POST">'; 
            echo '<input type="submit" value="Add New Course">'; // Add 
        echo '</form>';
        echo '<form action="tDeleteCourse.php" method="POST">'; 
            echo '<input type="submit" name="deleteS" value="Delete Course">'; // Delete 
        echo '</form>';
        echo '<form action="tHomePage.php" method="POST">'; 
            echo '<input type="submit" name="displayS" value="Display Current Course">'; // Display 
        echo '</form>';
    ?>
    <br>

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