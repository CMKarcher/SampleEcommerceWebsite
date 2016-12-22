<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Account</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="KARstyle.css" rel="stylesheet" type="text/css">
<link rel='shortcut icon' href='../favicon.ico' type='image/x-icon'/ >
<script type="text/javascript" src="validateRegister.js">
</script>
</head>

<body>
<?php include "menu.php";?>
<?php include "db.php";?>
<div id="wrapper">
<h1>Register</h1>

<form name="register" id="register" onSubmit="return ValidateInfo()" action="createAccount.php" method="post">
Create an account <br>
First Name: <input type="text" id="fname" name="fname"><br>
Last Name: <input type="text" id="lname" name="lname"><br>
Email: <input type="text" id="email" name="email"><br>
Password: <input type="text" id="password" name="password"><br><br>
Admin: <input type="checkbox" id="admin" name="admin">
<input type="submit" value="Submit"><br>
</form> 
<?php include "footer.php";?>
</div>
</body>
</html>