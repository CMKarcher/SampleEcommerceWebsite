<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="KARstyle.css" rel="stylesheet" type="text/css">
<link rel='shortcut icon' href='../favicon.ico' type='image/x-icon'/ >
</head>

<body>
<?php include "menu.php";?>
<?php include "db.php";?>
<div id="wrapper">
<h1>Login</h1>
<?php
	$query = "SELECT * FROM Customer WHERE Email = '".$_POST['email']."' AND Password = '".$_POST['password']."'";
	$customers = mysqli_query($db_Connection, $query) or die("Cannot run the query.");
	$numRecords = mysqli_num_rows($customers);
	if($numRecords == 1) {
		$row = mysqli_fetch_array($customers);
		$_SESSION[FirstName] = $row[FirstName];
		$_SESSION[LastName] = $row[LastName];
		$_SESSION[Email] = $row[Email];
		$_SESSION[Password] = $row[Password];
		$_SESSION[Admin] = $row[Admin];
		echo "You have logged in to the Karcher Art Gallery.<br>";
		echo "Welcome, ".$_SESSION[FirstName].".";
	} else {
		echo "Your email or password was wrong.<br>";
		echo "<a href='login.php'>Go back and try again</a>";
	}
?>
<?php include "footer.php";?>
</div>
</body>
</html>