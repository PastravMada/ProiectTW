<div class="container">
    <div class="content">
		<ul id="nav">
			<li><a href="homePage.php"> Home</a></li>
			<li><a href="contact.php">About</a></li>
			
			<?php if(!isset($username)){?>
			<li><a href="login.php">Login</a></li>
			<?php }else {?>
			<li><a href="back-end/logout.php">Logout</a></li>
			<?php } ?>
		</ul>
	</div>
</div>
