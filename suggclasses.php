<?php
    
    define('D_NAME', 'collegedb');
    define('D_USER', 'root');
    define('D_PASSWORD', '');
    define('D_HOST', 'localhost');
    
    //$majorId = 1;
    //if(!major)
 //   {
        $majorId = $_GET['major'];
   // }
    //else
    //$majorId = 1;
    
    $link = mysql_connect(D_HOST, D_USER, D_PASSWORD);
    
    $db_selected = mysql_select_db('collegedb', $link);
    
    if(!$db_selected) {
        die('Can\'t use ' .D_NAME . ': ' . mysql_error());
    }
    
echo "<form action = '' method='post' /> Based on your information suggested colleges are :";
$corrschool= "SELECT collegeinfodb.schoolname FROM collegeinfodb, cmajors, majors WHERE cmajors.cid = collegeinfodb.cid AND majors.mid = cmajors.mid AND cmajors.mid = $majorId";

$sql = mysql_query($corrschool);
  //  echo $sql;
    echo"</form>";
echo"<form action = '' method='post' />";
    
    //$rows = mysql_fetch_assoc($sql);
    
    while ($row = mysql_fetch_array($sql, MYSQL_NUM)) {
        echo $row[0];
        echo '<br>';
    }
   // echo $rows['schoolname'];
//echo "<form><input type='image' src='grads.png' alt='Submit' width='600' height='230'></form>";
echo "</form>";

mysql_close();
?>
