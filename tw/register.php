<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="Incluziuni/incluziuni.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
<header>
	<img src="banner1.png" width="1350" height="150">	
</header>
<div id="wrapper" action="register-backend2.php" method="post">
<div id="register" class="animate form">
      <form  action="back-end/register-back-end2.php" method="post" autocomplete="on"> 
        <h1> Creare cont nou </h1> 
        <p> 
          <label for="usernamesignup" class="uname">Username</label>
          <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" maxlenght="10"/>
          <span id="status"></span>
        </p>
        <script type="text/javascript">
        	document.getElementById("usernamesignup").onblur=function(){
        		var xmlhhtp;
        		var usernamesignup=document.getElementById("usernamesignup");
        		var value=usernamesignup.value;
        		if(usernamesignup.value!=""){
        			if(window.XMLHttpRequest){
        				xmlhhtp=new XMLHttpRequest();
        			}else{
        				xmlhhtp=new ActiveXObject("Microsoft.XMLHTTP");
        			}
        			xmlhhtp.onreadystatechange=function(){
        				if(xmlhhtp.readyState==4 && xmlhhtp.status==200){
        					document.getElementById("status").innerHTML=xmlhhtp.responseText;
        				}
        			};
        			xmlhhtp.open("GET","verifica.php?usernamesignup="+encodeURIComponent(usernamesignup.value),true);
        			xmlhhtp.send();
        		}
        	};
        </script>
        <p> 
          <label for="emailsignup" class="youmail">Adresa de email</label>
          <input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
        </p>
        <p> 
          <label for="passwordsignup" class="youpasswd">Parola</label>
          <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
        </p>
        <p> 
          <label for="numeregister" class="nume">Numele</label>
          <input id="nume" name="nume" required="required" type="text" />
        </p>
           <label for="prenumeregister" class="prenume">Prenumele</label>
          <input id="prenume" name="prenume" required="required" type="text" />
        </p>
        </p>
           <label for="oras" class="oras">Orasul</label>
          <input id="oras" name="oras" required="required" type="text" />
        </p>
        </p>
           <label for="adresa" class="adresa">Adresa</label>
          <input id="adresa" name="adresa" required="required" type="text" />
        </p>
         </p>
           <label for="telefon" class="telefon">Nr. telefon</label>
          <input id="telefon" name="telefon" required="required" type="text" />
        </p>
         </p>
           <label for="sex" class="sex">Genul</label>
          <input id="sex" name="sex" required="required" type="text" placeholder="female sau man" />
        </p>

        <p class="signin button"> 
          <input type="submit" value="Creaza cont"/> 
        </p>
        <p class="change_link">  
          Ai deja cont ?
          <a href="index.php" class="to_register">Atunci logheaza-te </a>
        </p>
    </div>
    
  </div>

</div>
  </form>

	
</body>
</html>