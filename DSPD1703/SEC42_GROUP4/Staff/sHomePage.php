<?php
    require_once 'displayStaff.php';

    echo '<table border="1">'; // Table
    echo '<tr>
            <th>Count</th>
            <th>Staff ID</th>
            <th>Staff Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Department</th>
        </tr>';

    
    $display = case3($conn);
    $count = 1;
    echo '<p1>No. of Staff: '.mysqli_num_rows($display).'</p1>';

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

    echo '<br><a href="../main.php"><button>Back</a>';
?>