<!DOCTYPE html>
<html>
<head>

<title>Day of Week</title>
<style type="text/css">
	body{
background-color:#BA4A00 
	}
	p {
	text-align: center;
	font-size: 100px;
	font-family: sans-serif;
	margin-top: 30%;
	color: #fff;
	}
</style>
</head>
<body>
<?php
$dayofweek = date("w");
switch ($dayofweek) {
	case '1':
		echo "<p>It is Monday</p>";
		break;
		case '2':
		echo "<p>It is Tuesday</p>";
		break;
	case '3':
		echo "<p>It is Wednesday</p>";
		break;
	
case '4':
		echo "<p>It is Thursday</p>";
		break;
	
	case '5':
		echo "<p>It is Friday</p>";
		break;
	case '6':
		echo "<p>It is Saturday</p>";
		break;
	case '0':
		echo "<p>It is Sunday<p>";
		break;
	
	
	
}

?>
</body>
</html>