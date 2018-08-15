<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
<?php
    
function sql_to_html_table_view($sqlresult, $delim="\n") {
  // starting table
  $htmltable =  '<table id="tblData" class="table">' . $delim ;   
  $counter   = 0 ;
  // putting in lines
  while( $row = $sqlresult->fetch_assoc()  ){
    if ( $counter===0 ) {
      // table header
      foreach ($row as $key => $value ) {
          $htmltable .=    "<th>" . $key . "</th>"  . $delim ;
      }
      $htmltable .=   "</tr>"  . $delim ; 
      $counter = 22;
    } 
      // table body
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
    
function sql_to_html_table_added($sqlresult, $delim="\n") {
  // starting table
  $htmltable =  '<table id="tblData" class="table">' . $delim ;   
  $counter   = 0 ;
  // putting in lines
  while( $row = $sqlresult->fetch_assoc()  ){
    if ( $counter===0 ) {
      // table header
      foreach ($row as $key => $value ) {
          $htmltable .=    "<th>" . $key . "</th>"  . $delim ;
      }
      $htmltable .=   "</tr>"  . $delim ; 
      $counter = 22;
    } 
      // table body
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
    
function sql_to_html_table($sqlresult, $delim="\n") {
  // starting table
  $htmltable =  '<table id="table" class="table">' . $delim ;   
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

      $htmltable .=   "<tr><td><a class=\"link\" href=\"edit5.php?clientidno=" . $row["CLIENTIDNO"] . "\">Edit</a> <a onClick=\"return confirm('Are You Sure You Want to Delete This Row?');\" class=\"link\" href=\"test_delete.php?clientidno=" . $row["CLIENTIDNO"] . "\">Delete</a> <a onClick=\"return confirm('Are You Sure You Want to Change this Row's Status?);\" class=\"link\" href=\"status.php?clientidno=" . $row["CLIENTIDNO"] . "\">Change Status for Deletion</a></td>"  . $delim ;
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
    
function sql_to_html_table_removed($sqlresult, $delim="\n") {
  // starting table
  $htmltable =  '<table id="table" class="table">' . $delim ;   
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

      $htmltable .=   "<tr><td><a onClick=\"return confirm('Are You Sure You Want to Restore this Row?');\" class=\"link\" href=\"restore.php?clientidno=" . $row["CLIENTIDNO"] . "\">Restore</a>  <a onClick=\"return confirm('Are You Sure You Want to Change this Row's Status?);\" class=\"link\" href=\"status2.php?clientidno=" . $row["CLIENTIDNO"] . "\">Revert Status Change</a>  <a onClick=\"return confirm('Are You Sure You Want to Permanently Erase This Row?');\" class=\"link\" href=\"erase.php?clientidno=" . $row["CLIENTIDNO"] . "\">Erase</a></td>"  . $delim ;
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
    
function sql_to_html_table_edit($sqlresult, $delim="\n") {
  // starting table
  $htmltable =  '<table id="table" class="table">' . $delim ;   
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

      $htmltable .=   "<tr><td><a onClick=\"return confirm('Are You Sure You Want to Permanently Erase This Row?');\" class=\"link\" href=\"erase2.php?clientidno=" . $row["CLIENTIDNO"] . "\">Erase</a></td>"  . $delim ;
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

function sql_to_form_edit($sqlresult) {
    $htmlform = "<form action=\"test_edit5.php\" method=\"post\">";
    $counter = 0;
    $htmlform .=  "<table class=\"table\">";
    while( $row = $sqlresult->fetch_assoc()  ){
        if ($counter ===0) {
            foreach ($row as $key => $value) {
                //echo "1st row";        
            }
            $counter++;
    }
    foreach ($row as $key => $value){
	    $htmlform .= "<tr><td>" . $key . ":" . "</td><td><input class=\"text\"type=\"text\" name=\"". $key . "\" value=\"". $value . "\"></td></tr>\n";
        }  
    }
    	$htmlform .=  "</table>";
        $htmlform .= "<input onClick=\"return confirm('Are You Sure You Want to Edit This Row?');\" class=\"submit\" type = \"submit\">
            </div>
        </form>";
    return ($htmlform);
}

?>

</html>