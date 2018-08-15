<html>
    <head>
         <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<div class="topnav">
    <form>
        <input class="button" type="button" value="Home" onclick="window.location.href='test5.php'"/>
    </form>
    <div id="topnav" class="collapse navbar-collapse justify-content-end">
     <button id="button" type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo"><i class="fa fa-plus"></i> Additional Actions</button>
    <div id="demo" class="collapse">
    <input class="buttoncrit" type="button" value="Clear Table" onclick="window.location.href='clear.php'"/>
    <input class="button" type="button" value="View Report" onclick="window.location.href='test_changes_view.php'"/>
        </div>
    </div>
    </div>
        
<?php

require 'functions.php';
    
include_once('dbconnect.php');

$sql = "SELECT PERMITNO AS \"Permit #\", DEPTNO AS \"Dept #\", LNAME AS \"Last Name\", FNAME AS \"First Name\", CLIENTIDNO, STATUS from Drivers_Added_and_Deleted ORDER BY PERMITNO ASC";
    
$results = $conn->query($sql);
    
echo sql_to_html_table_edit($results, $delim="\n");

$conn->close();
?>
    </body>
</html>