<!DOCTYPE html>
<html>
<head>
    <title>Staff Application Form</title>
    <link rel="stylesheet" href="styling.css">
</head>
<body>
    <h2>Staff Application Form</h2>
    <fieldset>
        <form action="appProcess.php" method="POST">
            <label>Staff ID</label><br>
            <input type="text" name="staffI" required><br><br>

            <label>Name</label><br>
            <input type="text" name="staffN" required><br><br>

            <label>Email</label><br>
            <input type="email" name="staffE" required><br><br>

            <label>Password</label><br>
            <input type="password" name="staffP" required><br><br>

            <label>Department</label><br>
            <input type="text" name="staffD" required><br><br>

            <input type="submit" value="Submit Application">
        </form>
    </fieldset>
</body>
</html>
