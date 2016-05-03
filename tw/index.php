<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
		<link rel="stylesheet" type="text/css" href="Incluziuni/incluziuni.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<script src="script.js" type="text/javascript"></script>
</head>
<body>
	<img src="flower.png" id="imagineLogin">
	<img src="bee.png" id="imagineLogin2">
	<p id="textLogin">Wellcome to FII Garden!</p>
	<div id="wrapper">

	<div id="register" class="animate form">
	<form align="center" action="back-end/login-backend.php?error=$er" method="post" autocomplete="on">

			<h1>Login</h1>
					<p>
					<label  for="username">Username: </label>
					<input type="text" id="username" name="username" placeholder="Username" value=""/>
					</p>
						
					<p>
					<label  for="password">Password: </label>
					<input type="password" id="password" name="password" placeholder="Password" value=""/>
					</p>

			
					<p id="logButton" class="signin button">
						<input id="submit" type="submit" value="Log In"/> 
					</p>
				
					

			<p id="registerP" class="change_link"> Nu aveti cont? Creati-va unul
			  <a class="to_register" href="register.php">aici!</a>
			</p>
		</form>
	</div>
</div>

</body>
</html>
