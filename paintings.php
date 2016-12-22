<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Paintings</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="KARstyle.css" rel="stylesheet" type="text/css">
<link rel='shortcut icon' href='../favicon.ico' type='image/x-icon'/ >
</script>
</head>

<body>
<?php include "menu.php";?>
<?php include "db.php";?>
<div id="wrapper">

<div id="content">
<?php
	$paintings = mysqli_query($db_Connection, "SELECT * FROM Products") or die("Cannot run the query.");
	$numRecords = mysqli_num_rows($paintings);
	echo "<h3>Here are the pieces we have:</h3>";
	for($i=0;$i<$numRecords;$i++) {
		$row = mysqli_fetch_array($paintings);
		echo $row["Name"]." ".$row["Description"]." $".$row["Cost"]."<br>";
		echo "<img src=../images/".$row["Image"]." class='painting'><br>";
	}
	
	mysqli_close($db_Connection);
?>
</div><!-- end of content -->
<?php include "footer.php";?>
</div>
</body>

</html>
