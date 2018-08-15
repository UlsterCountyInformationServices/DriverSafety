<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <div class="topnav">
        <form>
        <input class="button" type="button" value="Home" onclick="window.location.href='test5.php'"/>
    </form>
    </div>
<?php
    require 'functions.php';
include_once('dbconnect2.php');
if(isset($_POST['q'])){
	$q = $_POST['q'];
	$query = mysqli_query($conn,"SELECT Drivers.CLIENTIDNO, Drivers.DEPTNO, Drivers.LNAME, Drivers.FNAME, Violations.DRVRVIOL FROM Drivers JOIN Violations ON Drivers.CLIENTIDNO = Violations.CLIENTIDNO WHERE FNAME LIKE '%" . $q . "%' OR LNAME LIKE '%" . $q . "%' ORDER BY CLIENTIDNO");
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
</html>