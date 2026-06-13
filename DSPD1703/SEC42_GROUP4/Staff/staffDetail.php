<?php   
?>
<!DOCTYPE html>
<html>
<head>
    <title>Staff Personal Details</title>
    <link rel="stylesheet" href="styling.css">
</head>
<body>
    <h1>Staff Personal Details</h1>
    <form action="addStaff.php" method="POST">
        <fieldset style="text-align: left">
            <label for>Staff ID:</label>
            <input type="number" name="staffI" placeholder="Enter Staff Id"><br><br>
            <label for>Staff Name:</label>
            <input type="text" name="staffN" placeholder="Enter Staff Name"><br><br>
            <label for>Staff Email:</label>
            <input type="text" name="staffE" placeholder="Enter Staff Email"><br><br>
            <label for>Staff Password:</label>
            <input type="password" name="staffP" placeholder="Enter Staff Password"><br><br>
            <label for>Staff Department Name:</label>
            <input type="text" name="staffD" placeholder="Enter Staff Department Name"><br><br>

            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>