<html>
<a href="test_add_form.html">Add</a> 
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
      $htmltable .=   "<tr><th>Action</th>"  . $delim;
      foreach ($row as $key => $value ) {
          $htmltable .=    "<th>" . $key . "</th>"  . $delim ;
      }
      $htmltable .=   "</tr>"  . $delim ; 
      $counter = 22;
    } 
      // table body
      $htmltable .=   "<tr><td><a href=\"edit.php?clientidno=687244191\">edit</a>/delete</td>"  . $delim ;
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

$sql = "SELECT PERMITNO, DEPTNO, FNAME, LNAME, CLIENTIDNO from Drivers ORDER BY PERMITNO ASC\;";
$results = $conn->query($sql);
    
    
echo sql_to_html_table($results, $delim="\n");

$conn->close();
?>

</html>