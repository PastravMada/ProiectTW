<?php
	session_start();
	if(isset($_SESSION['login_user'])){
		$username=$_SESSION['login_user'];}

?>
<header>

</header>
<div class="container">
    <div class="content">
		<ul id="nav">
		<li><a href="../index.php">Home</a></li>
			<li><a href="admin.php">Home Admin</a></li>
			<li><a href="AddAdmin.php">Adaugare admin</a></li>
			<li><a href="insertPlanta.php">Adaugare Planta</a></li>
			<li><a href="updateAllFlowers.php">Modificare Planta</a></li>
			<li><a href="">Stergere Planta</a></li>
			<li><a href="rapoarte.php">Raport</a></li>
			
			<?php if(!isset($username)){?>
				<li><a href="index.php">Login</a></li>
				<?php }else {?>
				<li align="right"><a href="logout.php">Logout</a></li>
			<?php } ?>
		</ul>
	</div>
</div>
