<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page Two</title>
</head>
<body>

<pre>
	<?php 
	print_r($_GET);

	$id = $_GET['id'];
	$fname = $_GET['fname'];

	echo $id . "......" . $fname;


	?>
</pre>

</body>
</html>