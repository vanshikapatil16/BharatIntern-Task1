<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Content Management Tool</title>

	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div>
	
<?php

include 'db.php';

if (isset($_POST['submit'])) {
	$title = $_POST['title'];
	$content = $_POST['content'];

	$sql = "insert into content (title, content) values ('$title', '$content')";

	if (mysqli_query($con, $sql)) {
		echo "<script>alert('Content Saved Successfully !! If want to see then click on View')</script>";
	} else {
		echo "<script>alert('Content Saved Failed !!')</script>";
	}
	mysqli_close($con);
	
}

?>

</div>

<div class="container">
	<div class="header">
		<h2>Content Management Tool </h2>
	</div>
	<form class="form" method="post">
		<label>Title: </label>
		<input type="text" name="title" class="title" placeholder="Enter Title" /> <br>
		<label>Content: </label>
		<textarea rows="5" name="content" placeholder="Add 100 Words only"></textarea> <br>

		<input type="submit" name="submit" value="Save" />

	</form>
</div>

<label class="view"><a href="display.php" target="_blank">View</a></label>

</body>
</html>