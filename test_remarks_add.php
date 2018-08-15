<html>
<body>
<?php
include_once('dbconnect2.php');
    $CLIENTIDNO = $_POST["CLIENTIDNO"];
    $DRVRRMKS = $_POST["DRVRRMKS"];
    
    $sql = "INSERT Remarks SET CLIENTIDNO='$CLIENTIDNO', DRVRRMKS='$DRVRRMKS'";
    
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: test_remarks.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    
?>