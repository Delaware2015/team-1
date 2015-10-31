<?php
    
    define('D_NAME', 'collegedb');
    define('D_USER', 'root');
    define('D_PASSWORD', '');
    define('D_HOST', 'localhost');
    
    $link = mysql_connect(D_HOST, D_USER, D_PASSWORD);
    
    //     die('could not connect: ' . msql_error());
    
    
    $db_selected = mysql_select_db('collegedb', $link);
    
    if(!$db_selected) {
        die('Can\'t use ' .D_NAME . ': ' . mysql_error());
    }
    
    
    $sql = "INSERT INTO collegeinfodb (area, years, hbcu, sportoffered, numofrec, satact, applcost, gradrate, size, gpa, privpub, state, tution, schoolname) VALUES ('$area', '$years',  '$hbcu', '$sportoffered', '$numofrec', '$satact', '$applcost', '$gradrate', '$size', '$gpa', '$privpub', '$state', '$tution', '$schoolname')";
    
    //echo "Hello, $name ";
    
    if(!mysql_query($sql)){
        die('Error!: ' . mysql_error());
    }
    
    mysql_close();
    ?>

