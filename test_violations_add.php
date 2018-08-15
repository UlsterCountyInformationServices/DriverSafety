<html>
<body>
<?php
include_once('dbconnect2.php');
    $CLIENTIDNO = $_POST["CLIENTIDNO"];
    $DRVRVIOL = $_POST["DRVRVIOL"];
    
    $sql = "INSERT Violations SET CLIENTIDNO='$CLIENTIDNO', DRVRVIOL='$DRVRVIOL'";
    
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: test_violations.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    
?>