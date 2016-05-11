<?php
	session_start();
	if(isset($_SESSION['login_user'])){
		$username=$_SESSION['login_user'];}

?>

<div class="container">
    <div class="content">
		<ul id="nav">
		<?php if(!isset($username)){?>
			<li><a href="index.php">Login</a></li>
			<?php }else {?>
			<li><a href="back-end/logout.php">Logout</a></li>
			<?php } ?>
			<?php if(isset($_SESSION['login_user'])){?>
			<li><a href="updateProfile.php">Profile</a></li>
			<?php }?>
				<li><a href="index.php"> Home</a></li>
				<?php if(isset($_SESSION['login_user'])){
				$username=$_SESSION['login_user']; 
				if($username=='admin'){
						?>
				<li><a href="Admin/admin.php">Admin Home</a></li>
				<?php }}?>
				<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>
</div>