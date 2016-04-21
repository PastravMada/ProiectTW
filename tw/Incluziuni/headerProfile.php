
<header>
	<img class="displayed" src="logo.ico" width="366" height="200"  alt="">
	<?php if(!isset($username)){?>
		<div class="login"><a href="login.php">Login</a></div>
	<?php }else {?>
		<div class="login"><a href="back-end/logout.php">Logout</a></div>
		<?php } ?>
	<div id="cart"><a href="cart.php">Shopping Cart</a></div>
	<?php if(isset($_SESSION['login_user'])){?>
	<div class="login"><a href="change.php">My Profile</a>
		<?php }?>
	
</header>
<nav class="menu">
	<ul class="nav-fade">
			<li><a href="index.php"> Home</a></li>
			<li><a href="register.php">Register</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="about.php">About</a></li>
		</ul>
</nav>