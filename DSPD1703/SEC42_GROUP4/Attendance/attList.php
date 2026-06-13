<?php
    require_once 'db.php';

    $sql = "
        SELECT
            a.attendance_id,
            s.staff_name,
            c.course_name,
            a.attendance_date
        FROM attendance a
        INNER JOIN staff s
            ON a.staff_id = s.staff_id
        INNER JOIN training_course c
            ON a.course_id = c.course_id
        ORDER BY a.attendance_date DESC
    ";

    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Attendance Records</title>

    <style>
        table {
            border-collapse: collapse;
            width: 80%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

    <h2>Attendance Records</h2>

    <table>
        <tr>
            <th>Attendance ID</th>
            <th>Staff Name</th>
            <th>Course Name</th>
            <th>Attendance Date</th>
        </tr>

        <?php
            while ($row = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>".$row['attendance_id']."</td>";
                echo "<td>".$row['staff_name']."</td>";
                echo "<td>".$row['course_name']."</td>";
                echo "<td>".$row['attendance_date']."</td>";
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>