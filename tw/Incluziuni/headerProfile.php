
<div class="container">
    <div class="content">
		<ul id="nav">
			<li><a href="index.php"> Home</a></li>
			<li><a href="register.php">Register</a></li>
			<li><a href="contact.php">Contact</a></li>
			
			<?php if(!isset($username)){?>
			<li><a href="login.php">Login</a></li>
			<?php }else {?>
			<li><a href="back-end/logout.php">Logout</a></li>
			<?php } ?>
			<?php if(isset($_SESSION['login_user'])){?>
			<li><a href="updateProfile.php">My Profile</a></li>
			<?php }?>
		</ul>
	</div>
</div>