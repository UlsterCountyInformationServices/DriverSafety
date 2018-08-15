<?php
include_once('dbconnect.php');

$sql = "TRUNCATE TABLE Drivers_Added_and_Deleted";

echo $sql . "<P>";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: test_changes.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>