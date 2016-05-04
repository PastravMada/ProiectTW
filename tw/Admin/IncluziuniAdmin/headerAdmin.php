<?php
	session_start();
	if(isset($_SESSION['login_user'])){
		$username=$_SESSION['login_user'];}

?>
<header>
	<img class="displayed" src="imagini/banner1.png" width="1400" height="200"  alt="">
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
			<li><a href="">Add admin</a></li>
			<li><a href="insertPlanta.php">Insert</a></li>
			<li><a href="">Update</a></li>
			<li><a href="">Delete</a></li>
			<li><a href="rapoarte.php">Rapoarte</a></li>
		</ul>
</nav>