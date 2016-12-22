<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Feedback</title>
<link href="KARstyle.css" rel="stylesheet" type="text/css">
<link rel='shortcut icon' href='../favicon.ico' type='image/x-icon'/ >
</head>

<body>
<?php include "menu.php";?>
<div id="wrapper">
<div id="content">
<h1>Feedback</h1>

<p>Thanks <?php echo $_POST['name']; ?> for sending us your feedback.</p>
<p><a href="index.php">Back to home</a></p>

<?php

$messageToBusiness = 
"\r\nFrom: ".$_POST['name']."\r\n".
"\r\nEmail: ".$_POST['email']."\r\n".
"\r\nSubject: Feedback from website\r\n".
"\r\nHave you ordered from us before?: ".$_POST['visit']."\r\n".
"\r\nAre you sattisfied with the painting?: ".$_POST['painting']."\r\n".
"\r\nDid it arrive in a timely manner?: ".$_POST['time']."\r\n".
"\r\nWere there any flaws during shipping?: ".$_POST['flaws']."\r\n".
"\r\nWhat else would you like to tell us?: ".$_POST['comments']."\r\n"
;

$headerToBusiness = "From: $_POST[email]\r\n";
mail("ck123708@scots.edinboro.edu","Response",$messageToBusiness,$headerToBusiness);

$fileVar=fopen("../feedback.txt","a") or die("Unable to open text file on server");
fwrite($fileVar, "\n-------------------------------------------------------\r\n") or die("Unable to write to text file on server");
fwrite($fileVar,$messageToBusiness);

$messageToClient = 
"Dear ".$_POST['name'].":\r\n".
"\r\nWe have received the following feedback about out prducts from you.\r\n".
$messageToBusiness.
"\r\nThanks for your feedback.  We will continure to improve ourselves based on the respponses from people like you.\r\n".
"\r\nThe Karcher Art Gallery\r\n"
;

$headerToClient = "From: noreply@KarcherArtGallery.com\r\n";
mail($_POST[email],"Feedback confirmation",$messageToClient,$headerToClient);

?>

</div><!-- end of content -->
<?php include "footer.php";?>
</div>
</body>

</html>

</body>
</html>
