<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Painting</title>
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
	$query = "UPDATE Products SET Name='".$_POST[name]."', Image='".$_POST[image]."', Description='".$_POST[desc]."', Cost='".$_POST[cost]."' WHERE ProductID='".$_POST[id]."';";
	$addPainting = mysqli_query($db_Connection, $query) or die("Unable to add painting.");
	echo "<p>The painting ".$_POST[name]." has been modified.</p>";
?>
<?php include "footer.php";?>
</div>
</body>
</html>