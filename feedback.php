<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Feedback</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="KARstyle.css" rel="stylesheet" type="text/css">
<link rel='shortcut icon' href='../favicon.ico' type='image/x-icon'/ >
<script type="text/javascript" src="feedback.js"></script>
</head>

<body>
<?php include "menu.php";?>
<div id="wrapper">
<div id="content">
<h1>Feedback</h1>
<form name="KAR_Form" onSubmit="return ValidateContactForm()" action="thanks.php" method="post">
	What is your name? <input type="text" name="name" id="name"><br>
    What is your email? <input type="text" name="email" id="email">
    <br><br>
	Have you ordered from us before?<br>
    <input type="radio" name="visit" value="yes">Yes
    <input type="radio" name="visit" value="no">No
    <br><br>
    Are you sattisfied with the painting?<br>
    <input type="radio" name="painting" value="yes">Yes
    <input type="radio" name="painting" value="no">No
    <br><br>
    Did it arrive in a timely manner?<br>
    <input type="radio" name="time" value="yes">Yes
    <input type="radio" name="time" value="no">No
    <br><br>
    Were there any flaws during shipping?<br>
    <input type="radio" name="flaws" value="yes">Yes
    <input type="radio" name="flaws" value="no">No
    <br><br>
    What else would you like to tell us?<br>
    <textarea name="comments"></textarea>
    <br><br>
    <input type="submit">&nbsp;&nbsp;<input type="reset">
</form>
</div><!-- end of content -->
<?php include "footer.php";?>
</div>
</body>

</html>
