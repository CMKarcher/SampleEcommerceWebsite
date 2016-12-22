<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Shopping Cart</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="KARstyle.css" rel="stylesheet" type="text/css">
<link rel='shortcut icon' href='../favicon.ico' type='image/x-icon'/ >
</head>

<body>
<?php include "menu.php";?>
<?php include "db.php";?>
<div id="wrapper">

<div id="content">
<?php
	$query = "SELECT * FROM Transactions WHERE CustomerID = '".$_SESSION['Email']."'";
	$purchases = mysqli_query($db_Connection, $query) or die("Cannot run the query.");
	$numRecords = mysqli_num_rows($purchases);
	echo "You have made ".$numRecords." purchases through the Karcher Art Gallery.<br>";
	
	for($i=0;$i<$numRecords;$i++) {
		$row = mysqli_fetch_array($purchases);
		echo $row["ProductID"]." ".$row["CustomerID"]." $".$row["Price"]."<br>";
	}
	
	mysqli_close($db_Connection);
?>
</div><!-- end of content -->
<?php include "footer.php";?>
</div>
</body>

</html>
