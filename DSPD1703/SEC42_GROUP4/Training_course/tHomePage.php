<?php
    echo '<table border="1">'; // Table
    echo '<tr>
            <th>Count</th>
            <th>Course Id</th>
            <th>Course Name</th>
            <th>Description</th>
            <th>Training Date</th>
            <th>Staff Id</th>
        </tr>';

    
    $display = case3($conn);
    $count = 1;

    while ($qryRow = mysqli_fetch_assoc($display)) {
        echo '<tr>';
        echo '<td>'.$count.'</td>';
        echo '<td>'.$qryRow['staff_id'].'</td>';
        echo '<td>'.$qryRow['staff_name'].'</td>';
        echo '<td>'.$qryRow['email'].'</td>';
        echo '<td>'.$qryRow['password'].'</td>';
        echo '<td>'.$qryRow['department'].'</td>';
        echo '</tr>';
        $count++;
    }

    echo '</table>';

    echo '<a href="homePage.php"><button>Back</a>';
?>