<?php
	session_start();
	if(isset($_SESSION['login_user'])){
		$username=$_SESSION['login_user'];}

?>
<header>
	<img class="displayed" src="logo.ico" width="366" height="200"  alt="">
	<?php if(!isset($username)){?>
		<div class="login"><a href="login.php">Login</a></div>
	<?php }else {?>
		<div class="login"><a href="logout.php">Logout</a></div>
		<?php } ?>
</header>
<nav class="menu">
	<ul class="nav-fade">
			<li><a href="../index.php">Home</a></li>
			<li><a href="admin.php">Home Admin</a></li>
			<li><a href="insertParfum.php">Insert</a></li>
			<li><a href="insertPromotie.php">Insert promotie</a></li>
			<li><a href="update.php">Update</a></li>
			<li><a href="deleteParfum.php">Delete</a></li>
			<li><a href="rapoarte.php">Rapoarte</a></li>
			<li><a href="comenzi.php">Toate Comenzile</a></li>
			<li><a href="comenziOrase.php">Comenzile pe orase</a></li>
		</ul>
</nav>