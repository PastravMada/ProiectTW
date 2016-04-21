<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="Incluziuni/incluziuni.css">
	<link href="CSS/imgSlide.css" rel="stylesheet" type="text/css" />
	<script src="script.js" type="text/javascript"></script>
</head>
<body>
<header>
	<img src="flower.jpg" width="1350" height="400">	
</header>
	
	<section>
	<article id="logform" align="center">
			<div class="log">
				<h3>Login</h3>
				<?php if(isset($_GET['error'])){
							$er=$_GET['error'];
							if($er=='logForSell'){
								echo "<p style='font-size:10px;color:red;'>Trebuie sa fiti logat pentru a efectua cumpararea!</p>";
							}
						}
						if(isset($_GET['message'])){
							$message=$_GET['message'];
							if($message=='register'){
								echo "<p style='font-size:10px;color:green;'>Contul d-voastra a fost creat. Va rugam sa va logati.</p>";
							}
						}
						?>
				<form action="back-end/login-backend.php?error=$er" method="post">					
					<fieldset>
						<br>
							<div ><label  for="username">Username: </label></div>
							<div ><input type="text" id="username" name="username" placeholder="Username" value=""/></div>
						<br>
							<div ><label  for="password">Password: </label></div>
							<div ><input type="password" id="password" name="password" placeholder="Password" value=""/></div>
						<br>
							
						<div>
							<label for="remember" id="remember">
								<input type="checkbox" name="remember" id="remember" value="1"/>Remember me
							</label>
						</div>
					</fieldset>
						<p id="logButton">
							<input id="submit" type="submit" value="Log In"/> 
						</p>
					</form>
					
			</div>
			<p id="registerP">Nu aveti cont? Creati-va unul  <a style="color:blue;"href="register.php">aici!</a></p>
		</article>
	</section>
</body>
</html>