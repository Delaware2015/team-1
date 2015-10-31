<!DOCTYPE HTML >
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hello World</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<a  class="btn btn-primary " href="hompage.php#">HOME</a>
<body class="container"style="background-color:yellowgreen;color:Black;">
<div class="jumbotron">
<h1>The Children's Aid Society </h1>
<p>(Create Your Profile)</p>

<form action = "studentdb.php" method="post" />

<p>Name: <input type ="text" name="name" /></p>
<p>Password: <input type ="password" name="password" /></p>
<p>Distance in miles: <input type ="text" name="distance" /></p>
<p>Year (2 or 4 years): <input type ="text" name="yr" /></p>
<p>Area (Rural, Urban, Suburban) <input type ="text" name="area" /></p>
<p>GPA : <input type ="text" name="gpa" /></p>
<p>SAT scores: <input type ="text" name="satscores" /></p>
<p>Dream Job: <input type ="text" name="dreamjob" /></p>

<p>Major
<select name="major" >
<option value="1">Computer Science</option>
<option value="2">Physics</option>
<option value="3">business</option>

</select>
</p>
<p>Budget: <input type ="text" name="cost" /></p>

<input type="submit" value="Login" /></br>
</form>




</body>
</html>
