<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Logout</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="KARstyle.css" rel="stylesheet" type="text/css">
<link rel='shortcut icon' href='../favicon.ico' type='image/x-icon'/ >
</head>

<body>
<?php include "db.php";?>

<?php include "menu.php";?>

<div id="wrapper">
<h1>Logout</h1>
<?php
	session_unset();
	session_destroy();
?>
<p>Thank you for visiting the Karcher Art Gallery.<br>
You have logged out.</p>
<?php include "footer.php";?>
</div>
</body>
</html>