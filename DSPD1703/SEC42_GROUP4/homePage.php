<?php 
    require_once 'Staff/displayStaff.php';

    echo '<form action="Staff/staffDetail.php" method="POST">'; 
        echo '<input type="text" placeholder="Search for..."><br><br>';
        echo '<input type="submit" value="Add New Staff">'; // Add new staff
    echo '</form>';
    echo '<form action="Staff/deleteStaff.php" method="POST">'; 
        echo '<input type="submit" name="deleteS" value="Delete Staff">'; // Delete staff
    echo '</form>';
    echo '<form action="Staff/displayStaff.php" method="POST">'; 
        echo '<input type="submit" name="displayS" value="Display Current Staff">'; // Display staff
    echo '</form>';



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
?>