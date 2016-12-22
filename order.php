<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Order</title>
<link href="KARstyle.css" rel="stylesheet" type="text/css">
<link rel='shortcut icon' href='../favicon.ico' type='image/x-icon'/ >
</head>

<body>
<?php include "menu.php";?>
<?php include "db.php";?>
<div id="wrapper">
<div id="content">
<h1>Order</h1>

<p>Your order is being processed.<br>
Thank you for shopping at the Karcher Art Gallery.</p>

<p><a href="index.php">Back to home</a></p>

<?php
$painting = $_GET["prod"];
$cost = $_GET["cost"];
$email = $_SESSION["Email"];
unset($_GET["cost"]);
unset($_GET["prod"]);

$query = "SELECT * FROM Products WHERE ProductID=$painting";
$order = mysqli_query($db_Connection, $query) or die("Cannot run the query.");

$query = "INSERT INTO Transactions (ProductID, CustomerID, Price) VALUES ('$painting', '$email', $cost)";
$transaction = mysqli_query($db_Connection, $query) or die("Cannot log transaction.");

$query = "SELECT Name FROM Products WHERE ProductID=$painting";
$painttable = mysqli_query($db_Connection, $query) or die("Cannot get name.");
$numRecords = mysqli_num_rows($painttable);
echo $numRecords;
$hoop = mysqli_fetch_object($numRecords);
echo "here";
$paintname = $hoop["Name"];
echo $paintname;
$messageToBusiness = 
"\r\nFrom: ".$_SESSION[FirstName]." ".$_SESSION[LastName]."\r\n".
"\r\nEmail: ".$_SESSION[Email]."\r\n".
"\r\nSubject: Order\r\n".
"\r\nPainting: $paintname\r\n".
"\r\nCost: $cost\r\n"
;
echo $messageToBusiness;

$headerToBusiness = "From: $_SESSION[Email]\r\n";
mail("ck123708@scots.edinboro.edu","Order",$messageToBusiness,$headerToBusiness);

$fileVar=fopen("../orders.txt","a") or die("Unable to open file on server");
fwrite($fileVar, "\n-------------------------------------------------------\r\n") or die("Unable to write to text file on server");
fwrite($fileVar,$messageToBusiness);

$messageToClient = 
"Dear ".$_POST['name'].":\r\n".
"\r\nRecently you have ordered the following from out store:\r\n".
$messageToBusiness.
"\r\nThank you for shopping at the Karcher Art Gallery.\r\n"
;

$headerToClient = "From: noreply@KarcherArtGallery.com\r\n";
mail($_SESSION[Email],"Order confirmation",$messageToClient,$headerToClient);



?>

</div><!-- end of content -->
<?php include "footer.php";?>
</div>
</body>

</html>

</body>
</html>
