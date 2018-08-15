<html>
    <form>
        <input type="button" value="Add New Record" onclick="window.location.href='test_add_form.html'"/>
    </form>
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
      $htmltable .=   "<tr>"  . $delim;
      foreach ($row as $key => $value ) {
          $htmltable .=   "<th>" . $key . "</th>"  . $delim ;
      }
      $htmltable .=   "</tr>"  . $delim ; 
      $counter = 22;
    } 
      // table body
      $htmltable .=   "<tr>"  . $delim ;
      foreach ($row as $key => $value ) {
          $htmltable .=   "<td>" . $value . "</td>"  . $delim ;
      }
      //echo '<td><a href:"/test_edit_form.html?id='mysql_result($value, $row, 'PERMITNO') . '">Edit</a></td>';
      //echo '<td><a href:"/test_delete.php?id='mysql_result($value, $row, 'PERMITNO') . '">Delete</a></td>';
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

$sql = "SELECT * FROM Drivers ORDER BY PERMITNO ASC";
$results = $conn->query($sql);
    
    
echo sql_to_html_table($results, $delim="\n");

$conn->close();
?>

</html>

