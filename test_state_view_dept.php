<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <div class="topnav">
    <form>
        <input class="button" type="button" value="Home" onclick="window.location.href='test5.php'"/>
    </form>
    <script src="script.js"></script>
    <button class="button" onclick="exportTableToExcel('tblData')">Download Table</button>
    </div>
<?php
 require 'functions.php';
include_once('dbconnect.php');
    $option = isset($_POST['deptlist']) ? $_POST['deptlist'] : false;
   if ($option) {
	$query = mysqli_query($conn,"SELECT PERMITNO AS \"Permit Number\", LISCENIDNO AS \"Liscense ID\", DEPTNO AS \"Department Number\", FNAME AS \"First Name\", LNAME AS \"Last Name\", CLIENTIDNO FROM Drivers WHERE DEPTNO = '$option' ORDER BY PERMITNO ASC");
	$count = mysqli_num_rows($query);
	if($count == "0"){
		$output = '<h2>No result found!</h2>';
	}else{
        echo sql_to_html_table_view($query, $delim="\n");
        $conn->close();
		while($row = mysqli_fetch_array($query)){
		$s = $row['FNAME']; 
				$output = '<h2>'.$s.'</h2><br>';
            echo $output;
			}
		}
	}
?>