<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Painting</title>
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

<form name="painting" id="painting" onSubmit="" action="createpainting.php" method="post">
<h2>Add Painting</h2> <br>
Name: <input type="text" id="name" name="name"><br>
Image: <input type="text" id="image" name="image"><br>
Description: <input type="text" id="desc" name="desc"><br>
Cost: <input type="text" id="cost" name="cost"><br><br>
<input type="submit" value="Submit"><br>
</form> 
</div><!-- end of content -->
<?php include "footer.php";?>
</div>
</body>

</html>
