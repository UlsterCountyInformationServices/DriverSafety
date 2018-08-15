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
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <form action="test_search_removed_scrpt.php" method=post>
        <input type="text" name="q" placeholder="Search for Record...">
        <button class="searchButton" type="submit" value="search"><i class="fa fa-search"></i></button>
    </form>
    </div>

    
    <?php

require 'functions.php';
    
include_once('dbconnect.php');

$sql = "SELECT PERMITNO AS \"Permit Number\", DEPTNO AS \"Department Number\", FNAME AS \"First Name\", LNAME AS \"Last Name\", CLIENTIDNO, STATUS from Drivers_Recovery ORDER BY PERMITNO ASC";
$results = $conn->query($sql);
       
echo sql_to_html_table_removed($results, $delim="\n");

$conn->close();
?>

    
</html>