<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Account</title>
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
	$is_Admin = 0;
	if(isset($_POST["admin"]) && !empty($_POST["admin"])) {
		$is_Admin = 1;
	} 
	$query = "SELECT * FROM Customer WHERE Email='".$_POST['email']."'";
	$customers = mysqli_query($db_Connection, $query) or die("Cannot run the query.");
	$numRecords = mysqli_num_rows($customers);
	if($numRecords > 0) {
		echo "<p>Sorry, but the email you entered already exists in our database.</p><br>";
	} else {
		$query = "INSERT INTO Customer (FirstName, LastName, Email, Password, Admin) VALUES ('".$_POST[fname]."', '".$_POST[lname]."', '".$_POST[email]."', '".$_POST[password]."', '".$is_Admin."');";
		$addCustomer = mysqli_query($db_Connection, $query) or die("Unable to add customer.");
		echo "<p>You have successfully registered you account.</p>";
	}
?>
<?php include "footer.php";?>
</div>
</body>
</html>