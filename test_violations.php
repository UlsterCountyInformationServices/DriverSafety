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
        <input class="button" type="button" value="Add Violation" onclick="window.location.href='test_violations_form.php'"/>
    </form>

    <form action="test_search_violations_scrpt.php" method=post>
        <input type="text" name="q" placeholder="Search for Record...">
        <button class="searchButton" type="submit" value="search"><i class="fa fa-search"></i></button>
    </form>
    <!--<div id="topnav" class="collapse navbar-collapse justify-content-end">
     <button id="button" type="button" aria-expanded="false" class="btn btn-info" data-toggle="collapse" data-target="#demo"><i class="fa fa-plus"></i> Additional Actions</button>
    <div id="demo" class="collapse">
     <form class="form" action="test_violations_view.php" method=post> 
        <select name="deptlist">
            <option>Search By Department</option>
            <option value="2">2</option>
            <option value="1680">1680</option>
            <option value="4310">4310</option>
            <option value="1010">1010</option>
            <option value="5010">5010</option>
            <option value="3110">3110</option>
            <option value="1165">1165</option>
            <option value="1230">1230</option>
            <option value="1340">1340</option>
            <option value="6010">6010</option>
            <option value="6772">6772</option>
            <option value="5630">5630</option>
            <option value="1620">1620</option>
            <option value="3020">3020</option>
            <option value="1315">1315</option>
            <option value="1170">1170</option>
            <option value="3140">3140</option>
            <option value="3411">3411</option>
            <option value="8020">8020</option>
            <option value="6510">6510</option>
        </select>
        <input text-align="center" class="searchButton" type = "submit" value="Select">
    </form>
    </div>
    </div>-->
    </div>
    </body>
</html>

<?php

require 'functions.php';

include_once('dbconnect2.php');


$sql = "SELECT Drivers.CLIENTIDNO, Drivers.DEPTNO AS \"Department\", Drivers.LNAME AS \"Last Name\", Drivers.FNAME AS \"First Name\", Violations.DRVRVIOL AS \"Violation\" FROM Drivers, Violations WHERE Drivers.CLIENTIDNO = Violations.CLIENTIDNO ORDER BY CLIENTIDNO";
$results = $conn->query($sql);
       
echo sql_to_html_table_view($results, $delim="\n");

$conn->close();
?>