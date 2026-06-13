<?php // WRONG CODE
    require_once 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Courses By Staff</title>
</head>
<body>

<h2>Search Courses By Staff</h2>

<form method="POST">

    Staff ID:

    <input type="text" name="staff_id">

    <input type="submit" value="Search">

</form>

<?php

if(isset($_POST['staff_id']))
{
    $staff_id = $_POST['staff_id'];

    $sql = "
    SELECT
        s.staff_name,
        tc.course_name,
        a.status
    FROM application a
    JOIN staff s
        ON a.staff_id = s.staff_id
    JOIN training_course tc
        ON a.course_id = tc.course_id
    WHERE s.staff_id = '$staff_id'
    ";

    $result = mysqli_query($conn,$sql);

    echo "<table border='1'>";

    echo "<tr>";
    echo "<th>Staff</th>";
    echo "<th>Course</th>";
    echo "<th>Status</th>";
    echo "</tr>";

    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr>";

        echo "<td>".$row['staff_name']."</td>";
        echo "<td>".$row['course_name']."</td>";
        echo "<td>".$row['status']."</td>";

        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>