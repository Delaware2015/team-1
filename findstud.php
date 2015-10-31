<?php
    
    define('D_NAME', 'collegedb');
    define('D_USER', 'root');
    define('D_PASSWORD', '');
    define('D_HOST', 'localhost');
    
    $link = mysql_connect(D_HOST, D_USER, D_PASSWORD);
    
    $db_selected = mysql_select_db('collegedb', $link);
    
    if(!$db_selected) {
        die('Can\'t use ' .D_NAME . ': ' . mysql_error());
    }

   $name = $_POST['name'];
   $password = md5($_POST['password']);
   $sqltext="SELECT * FROM studentdb WHERE name='".$name."' AND password='".$password."'";
   // echo $sqltext;
   $sql = mysql_query($sqltext);
 
    $rows = mysql_fetch_assoc($sql);
    
    if(!$sql){
        die('Error!!: ' . mysql_error());
    }
    
    mysql_close();
       echo '<script>window.location.href = "suggclasses.php";</script>';
?>
