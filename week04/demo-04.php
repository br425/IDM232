<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>Passing Info</h1>
<a href="pageTwo.php?id=2&fname=ben">Page 2 link</a>
	<h2>Complete Class List</h2>
	<ol>
		<?php 
			$names = array("Ben","Axel","Louise","Brendan","Kaitlyn","Kristen","Seamus","Khan","Su","Anisa","Deborah");
			for ($ndx=0; $ndx < count($names); $ndx++) { 
			echo "<li>" . $names{$ndx} . "</li>";
				
			}
		 ?>
	</ol>
	<h2>Even Class List</h2>
	<ul>
		<?php 
			for ($ndx=0; $ndx < count($names); $ndx++) { 
				if ($ndx % 2 != 0) {
			echo "<li>" . $names{$ndx} . "</li>";
				}
				
			}
		 ?>
	</ul>
		<h2>Alphabetical Class List</h2>
	<ul>
		<?php 
		$sortedNames = $names;
		sort($sortedNames);
			for ($ndx=0; $ndx < count($sortedNames); $ndx++) { 
			echo "<li>" . $sortedNames{$ndx} . "</li>";
				}
				
		 ?>
	</ul>

</body>
</html>