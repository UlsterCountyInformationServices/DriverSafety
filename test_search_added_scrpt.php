<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <form>
        <input class="button" type="button" value="Home" onclick="window.location.href='test5.php'"/>
    </form>
<?php
    require 'functions.php';
include_once('dbconnect.php');
if(isset($_POST['q'])){
	$q = $_POST['q'];
	$query = mysqli_query($conn,"SELECT PERMITNO AS \"Permit Number\", DEPTNO AS \"Department Number\", FNAME AS \"First Name\", LNAME AS \"Last Name\", CLIENTIDNO FROM Drivers_Added WHERE PERMITNO = '$q' OR DEPTNO = '$q' OR FNAME LIKE '%" . $q . "%' OR LNAME LIKE '%" . $q . "%' ORDER BY PERMITNO ASC");
	$count = mysqli_num_rows($query);
	if($count == "0"){
		$output = '<h2>No result found!</h2>';
	}else{
        echo sql_to_html_table_added($query, $delim="\n");
        $conn->close();
		while($row = mysqli_fetch_array($query)){
		$s = $row['FNAME']; 
				$output = '<h2>'.$s.'</h2><br>';
            echo $output;
			}
		}
	}
?>
</html>