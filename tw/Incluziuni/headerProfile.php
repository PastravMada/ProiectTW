
<header>
	<img class="displayed" src="banner3.jpg" width="1400" height="150"  alt="">
	<?php if(!isset($username)){?>
		<div class="login"><a href="login.php">Login</a></div>
	<?php }else {?>
		<div class="login"><a href="back-end/logout.php">Logout</a></div>
		<?php } ?>
	<?php if(isset($_SESSION['login_user'])){?>
	<div class="login"><a href="updateProfile.php">My Profile</a>
		<?php }?>
	
</header>
<nav class="menu">
	<ul class="nav-fade">
			<li><a href="index.php"> Home</a></li>
			<li><a href="register.php">Register</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
</nav>