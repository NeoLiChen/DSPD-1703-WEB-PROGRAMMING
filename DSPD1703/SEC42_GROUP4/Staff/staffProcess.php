<?php
    if ((!isSet($_POST['nName']))) {
        echo '<script>alert("Please log in first"); 
        window.location.href="../frontpage.php"</script>';
        exit(); 
    } 
    
    if (isSet($_POST['addS'])) {
        header('Location: Staff/staffDetail.php');
        exit();
    } else if (isSet($_POST['deleteS'])) {
        header('Location: Staff/deleteStaff.php');
        exit();
    } else if (isSet($_POST['displayS'])) {
        header('Location: Staff/displayStaff.php');
        exit();
    } 
?>
