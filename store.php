<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Store</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="KARstyle.css" rel="stylesheet" type="text/css">
<link rel='shortcut icon' href='../favicon.ico' type='image/x-icon'/ >
<script type="text/javascript" src="store.js"></script>

</head>

<body>
<?php include "menu.php";?>
<?php include "db.php";?>
<div id="wrapper">
<div id="content">
    <h2>The Karcher Art Gallery offers prints of its more popular pieces to its customers.  If there is a certain piece in our gallery that you would like a print of, please fill out this form.</h2>
    <p>All images in the store are my own original work.</p>
    <br><br>
    <form id="storeForm" method="post" name="KAR_Form" onSubmit="" action="order.php">
    <?php
		$paintings = mysqli_query($db_Connection, "SELECT * FROM Products") or die("Cannot run the query.");
		$numRecords = mysqli_num_rows($paintings);
		if(!isset($_SESSION[FirstName])) {
			echo "<p>You must log in to buy stuff.</p>";
		} else {
			for($i=0;$i<$numRecords;$i++) {
				$row = mysqli_fetch_array($paintings);
				echo "<a href='order.php?prod=".$row["ProductID"]."&cost=".$row["Cost"]."'>Buy</a>";
				//echo "<input type='submit' id=".$row["ProductID"]." value='Buy'> ";
				echo " ".$row["Name"]." ".$row["Description"]." $".$row["Cost"]."<br>";
				echo "<img src=../images/".$row["Image"]." class='painting'><br>";
			}
		}
	?>
    </form>
</div><!-- end of content -->
<?php include "footer.php";?>
</div>
</body>

</html>
