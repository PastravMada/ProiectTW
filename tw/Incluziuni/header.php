<?php
	session_start();
	if(isset($_SESSION['login_user'])){
		$username=$_SESSION['login_user'];}

?>
<header>
	<img class="displayed" src="flower.jpg" width="1350" height="400"  alt="">
	<?php if(!isset($username)){?>
		<div class="login"><a href="login.php">Login</a></div>
	<?php }else {?>
		<div class="login"><a href="back-end/logout.php">Logout</a></div>
		<?php } ?>
	<?php if(isset($_SESSION['login_user'])){?>
	<div class="login"><a href="change.php">My Profile</a>
		<?php }?>
	
</header>
<nav class="menu">
	<ul class="nav-fade">
			<li><a href="index.php"> Home</a></li>
			<?php if(isset($_SESSION['login_user'])){
			$username=$_SESSION['login_user']; 
				if($username=='admin'){
				?>
			<li><a href="Admin/admin.php">Admin Home</a></li>
			<?php }}?>
			<li><a href="contact.php">Contact</a></li>
		</ul>
</nav>