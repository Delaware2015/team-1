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
    
    $name = $_POST['name'];
    $password = md5($_POST['password']);
    $distance = $_POST['distance'];
    $yr = $_POST['yr'];
    $area = $_POST['area'];
    $gpa = $_POST['gpa'];
    $satscores = $_POST['satscores'];
    $dreamjob = $_POST['dreamjob'];
    $major = $_POST['major'];
    $cost = $_POST['cost'];
 
    
    $sql = "INSERT INTO studentdb (name, password,distance,yr,area,gpa,satscores,dreamjob, major, cost) VALUES ('$name', '$password', '$distance', '$yr', '$area', '$gpa', '$satscores', '$dreamjob','$major', '$cost')";
    
    echo "Hello, $name ";
    
    if(!mysql_query($sql)){
        die('Error!: ' . mysql_error());
    }
    
    mysql_close();
    $url = "suggclasses.php";
    echo "<script>window.location.href = 'suggclasses.php?major=$major';</script>";
    ?>
 // echo '<script>window.location.href = "new.php";</script>';
    
