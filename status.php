<?php
include_once('dbconnect.php');
$CLIENTIDNO = $_GET['clientidno'];

$sql = "UPDATE Drivers SET STATUS='D' WHERE CLIENTIDNO=" . $CLIENTIDNO ."";

echo $sql . "<P>";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: test5.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>