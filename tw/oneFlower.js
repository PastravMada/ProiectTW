function changeImage(src1) {
			document.getElementById("bigImg").src = src1;
	   };
	   
	   function descriere1(){
        var xmlhhtp;
	    var denumirePopulara=document.getElementById('en');
        var value=denumirePopulara.value;
        	if(denumirePopulara.value != ""){
        			if(window.XMLHttpRequest){
        				xmlhhtp = new XMLHttpRequest();
        			}else{
        				xmlhhtp = new ActiveXObject("Microsoft.XMLHTTP");
        			}
					xmlhhtp.onreadystatechange = function(){
        			if(xmlhhtp.readyState==4 && xmlhhtp.status==200){
        				document.getElementById("engl").innerHTML=xmlhhtp.responseText;
        			}
        		};
        	xmlhhtp.open("GET","descriereMultilingva.php?denumirePopulara="+encodeURIComponent("fjklsf"),true);
        	xmlhhtp.send();
        	}
	};