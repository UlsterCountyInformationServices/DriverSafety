<?php
include_once('dbconnect.php');
$CLIENTIDNO = $_GET['clientidno'];

$sql = "INSERT INTO Drivers SELECT * FROM Drivers_Recovery WHERE CLIENTIDNO=" . $CLIENTIDNO ."";
$sql1 = "DELETE FROM Drivers_Recovery WHERE CLIENTIDNO=" . $CLIENTIDNO ."";

echo $sql . "<P>";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: test_removed_view.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
    header("Location: test_removed_view.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>