<?php
include_once('dbconnect.php');
$CLIENTIDNO = $_GET['clientidno'];

$sql = "DELETE FROM Drivers_Recovery WHERE CLIENTIDNO=" . $CLIENTIDNO ."";

echo $sql . "<P>";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: test_removed_view.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>