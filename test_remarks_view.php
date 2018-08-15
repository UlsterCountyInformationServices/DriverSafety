<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<div class="topnav">
    
    <form>
        <input class="button" type="button" value="Home" onclick="window.location.href='test5.php'"/>
        <input class="button" type="button" value="Add Remark" onclick="window.location.href='test_remarks_form.php'"/>
    </form>

    <form action="test_search_scrpt.php" method=post>
        <input type="text" name="q" placeholder="Search for Record...">
        <button class="searchButton" type="submit" value="search"><i class="fa fa-search"></i></button>
    </form>
    
    </div>
    </body>
</html>

<?php
 require 'functions.php';
include_once('dbconnect2.php');
    $option = isset($_POST['deptlist']) ? $_POST['deptlist'] : false;
   if ($option) {
	$query = mysqli_query($conn,"SELECT Drivers.CLIENTIDNO, Drivers.DEPTNO, Drivers.LNAME, Drivers.FNAME, Remarks.DRVRRMKS FROM Drivers JOIN Remarks ON Drivers.CLIENTIDNO = Remarks.CLIENTIDNO WHERE DEPTNO = '$option' ORDER BY CLIENTIDNO");
	$count = mysqli_num_rows($query);
	if($count == "0"){
		$output = '<h2>No result found!</h2>';
	}else{
        echo sql_to_html_table_view($query, $delim="\n");
        $conn->close();
		while($row = mysqli_fetch_array($query)){
		$s = $row['CLIENTIDNO']; 
				$output = '<h2>'.$s.'</h2><br>';
            echo $output;
			}
		}
	}
?>