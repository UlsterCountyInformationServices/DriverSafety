<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    
    <form>
        <input class="button" type="button" value="Home" onclick="window.location.href='test4.php'"/>
    </form>
<?php
 require 'functions.php';
include_once('dbconnect.php');
    $option = isset($_POST['deptlist']) ? $_POST['deptlist'] : false;
   if ($option) {
	$query = mysqli_query($conn,"SELECT DEPTNO AS \"Department Number\", PERMITNO AS \"Permit Number\", LNAME AS \"Last Name\", FNAME AS \"First Name\", MAILADDR1 AS \"Mail Address 1\", MAILADDR2 AS \"Mail Address 2\", COUNTYADDR AS \"County Address\" FROM Drivers WHERE DEPTNO = '$option' ORDER BY PERMITNO ASC");
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
