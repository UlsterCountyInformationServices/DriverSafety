<?php
include_once('dbconnect.php');
$CLIENTIDNO = $_GET['clientidno'];

$sql = "INSERT INTO Drivers_Recovery SELECT * FROM Drivers WHERE CLIENTIDNO=" . $CLIENTIDNO ."";
$sql1 = "INSERT INTO Drivers_Added_and_Deleted SELECT * FROM Drivers WHERE CLIENTIDNO=" . $CLIENTIDNO ."";
$sql2 = "DELETE FROM Drivers WHERE CLIENTIDNO=" . $CLIENTIDNO ."";


echo $sql . "<P>";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: test5.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
    header("Location: test5.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
    header("Location: test5.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>