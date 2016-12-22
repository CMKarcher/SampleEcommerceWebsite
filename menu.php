<header>
	<img src="BannerText.png" height="250" alt="Karcher Art Gallery">
</header>
<?php
	session_start();
?>
<div id="mlogin">
	<?php
	if($_SESSION[FirstName] != null) {
		echo "<p>You are signed in as ".$_SESSION[FirstName]." ".$_SESSION[LastName].". <a href='logout.php'>LOGOUT</a></p>";
	} else {
		echo "<p>You are not logged in. <a href='login.php'>LOGIN</a></p>";
	}
	?>
</div>
<nav>
	<ul>
    	<li class="dropdown">
        	<a href="index.php" class="dropbtn">Home</a>
        	<div class="dropdown-content">
			</div>
        </li>
        <li class="dropdown">
        	<a href="about.php" class="dropbtn">About</a>
        	<div class="dropdown-content">
			</div>
        </li>
        <li class="dropdown">
        	<a href="paintings.php" class="dropbtn">Products</a>
        	<div class="dropdown-content">
        	<a href="store.php" class="dropbtn">Store</a>
			</div>
        </li>
        <li class="dropdown">
        	<a href="feedback.php" class="dropbtn">Feedback</a>
        	<div class="dropdown-content">
			</div>
        </li>
        <?php
			echo "<li class='dropdown'>";
			if(!isset($_SESSION[FirstName])) {
				echo "<a href='login.php' class='dropbtn'>Login</a>
				<div class='dropdown-content'>
				</div>
			</li>";
			} else {
				echo "<a href='' class='dropbtn'>Account</a>
				<div class='dropdown-content'>
				<a href='logout.php' class='dropbtn'>Logout</a>
        		<a href='shoppingcart.php' class='dropbtn'>Shopping Cart</a>
				</div>
			</li>";
			}
			if($_SESSION[Admin] == 1) {
				echo "
				<li class='dropdown'>
					<a href='#' class='dropbtn'>Administrator</a>
					<div class='dropdown-content'>
						<a href='editpainting.php'>Edit painting info</span></a>
						<a href='addpainting.php'>Add new painting</span></a>
						<a href='../feedback.txt' target='_blank'><span>See Feedback</span></a>
					</div>
				</li>
				";
			}
		?>
    </ul>
</nav>
<!--

-->