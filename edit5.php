
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
<div class="wrapper1">
<?php
require 'functions.php';

$CLIENTIDNO=$_GET['clientidno'];

include_once('dbconnect.php');

$sql = "SELECT * from Drivers WHERE CLIENTIDNO = " . $CLIENTIDNO . ";";
$results = $conn->query($sql);
    
echo "<html><title>Edit Record</title><body>"; 
echo $CLIENTIDNO;
echo sql_to_form_edit($results);
echo "</body></html>";
$conn->close();


?>
</div>
