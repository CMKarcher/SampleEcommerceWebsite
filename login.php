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

<form name="login" id="login" action="loginConfirm.php" method="post">
Enter your information <br>
Email: <input type="text" id="email" name="email"><br>
Password: <input type="text" id="password" name="password"><br><br>
<input type="submit" value="Login"><br>
</form>
<p>Don't have an account? <a href="newaccount.php">Make one</a></p>
<?php include "footer.php";?>
</div>
</body>
</html>