<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Content Data</title>

<style type="text/css">
	
h2 {
	text-align: center;
	font-size: 30px;
	text-decoration: underline;
}

body {
	margin: 30px;
}
.php {
	border: 1px solid #000;
	padding: 10px;
	padding-top: 15px;
}

</style>

</head>
<body>


<div class="header">
	<h2>Stored Data</h2>
</div>

<div class="php">
<?php

include 'db.php';

$sql = "select * from content";
$query = mysqli_query($con, $sql);

$data = mysqli_num_rows($query);

if ($data != 0) {
	while ($result = mysqli_fetch_assoc($query)) {
		echo "<article><b> Title: </b>".$result['title']." ";
		echo "<article><b> Content: </b>".$result['content']." ";
		echo "<hr><br>";

	}
	mysqli_close($con);
}

?>

</div>



</body>
</html>