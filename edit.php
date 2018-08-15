<html>

<?php

$servername = "172.20.3.98";
$username = "safety";
$password = "safety";
$dbname = "SafetyDL";
   

function sql_to_html_table($sqlresult, $delim="\n") {
  // starting table
  $htmltable =  "<table border=2>" . $delim ;   
  $counter   = 0 ;
  // putting in lines
  while( $row = $sqlresult->fetch_assoc()  ){
    if ( $counter===0 ) {
      // table header
      //$htmltable .=   "<tr><th>Action</th>"  . $delim;
      $htmltable .=   "<tr>"  . $delim;
      foreach ($row as $key => $value ) {
          $htmltable .=    "<th>" . $key . "</th>"  . $delim ;
      }
      $htmltable .=   "</tr>"  . $delim ; 
      $counter = 22;
    } 
      // table body
      $htmltable .=   "<tr>"  . $delim ;
      //echo "<td>$key</td";
      foreach ($row as $key => $value ) {
          $htmltable .=   "</td>" . "<td>" . $value . "</td>"  . $delim ;
      }
      $htmltable .=   "</tr>"   . $delim ;
  }
  // closing table
  $htmltable .=   "</table>"   . $delim ; 
  // return
  return( $htmltable ) ; 
}


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT PERMITNO, DEPTNO, FNAME, LNAME, CLIENTIDNO from Drivers WHERE CLIENTIDNO = $CLIENTIDNO;"
$results = $conn->query($sql);
    
//$clientidno = $_GET['clientidno'];
//echo $clientidno;
    
echo sql_to_html_table($results, $delim="\n");

$conn->close();
?>

</html>
