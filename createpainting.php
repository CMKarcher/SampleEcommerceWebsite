<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Painting</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="KARstyle.css" rel="stylesheet" type="text/css">
<link rel='shortcut icon' href='../favicon.ico' type='image/x-icon'/ >
<script type="text/javascript" src="rotate.js">
</script>
</head>

<body>
<?php include "menu.php";?>
<?php include "db.php";?>
<div id="wrapper">
<h1>Register</h1>
<?php
	$query = "INSERT INTO Products (Name, Image, Description, Cost) VALUES ('".$_POST[name]."', '".$_POST[image]."', '".$_POST[desc]."', '".$_POST[cost]."');";
	$addPainting = mysqli_query($db_Connection, $query) or die("Unable to add painting.");
	echo "<p>The painting ".$_POST[name]." has been added.</p>";
?>
<?php include "footer.php";?>
</div>
</body>
</html>