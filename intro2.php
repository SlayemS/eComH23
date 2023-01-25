<!DOCTYPE html>
<html>
<!-- DO NOT EVER DO THIS AGAIN: mix M, V and C -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action='' method='post'>
		<label>First Name</label>
		<input type="text" name="firstName"><br>
		<label>Last Name</label>
		<input type="text" name="lastName"><br>
		<label>Newsletter</label>
		<input type="checkbox" name="newsletter">Yes! I want to subscribe.<br>
		<input type="submit" name="action" value="Send"><br>
	</form>

</body>
</html>

<?php
echo '<pre>';
//get input data from HTTP request
//data sent through the GET method
if(isset($_GET['name']))
{
	echo $_GET['name'];
}

echo $_GET['name'] ?? '';

foreach ($_GET as $key => $value) {
	echo "$key=>$value<br>";
}

var_dump($_GET);

//get to the POST data with $_POST
//POST data is sent in the HTTP headers
echo 'POST DATA:<br>';
var_dump($_POST);

echo "REQUEST_METHOD:", $_SERVER['REQUEST_METHOD'];

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	echo 'THIS WAS SENT THROUGH THE HTTP HEADERS!';
}