
<?php include("DBConfig.php");   
    $switch;
        if(isset($_POST['motorSwitch'])) {
            $switch = 1;
        } else { 
            $switch = 0;
        }
    $sql = "INSERT INTO motorvalues (motorRange1, motorRange2, motorRange3, motorRange4, motorRange5, motorRange6, motorSwitch)
    VALUES ('$_POST[motorRange1]', '$_POST[motorRange2]', '$_POST[motorRange3]', '$_POST[motorRange4]', '$_POST[motorRange5]', '$_POST[motorRange6]', '$switch')";

    if(mysqli_query($conn, $sql)){
            header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
        // Close connection
        mysqli_close($conn);
?>
