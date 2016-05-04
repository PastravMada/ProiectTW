function checkDenumire(obj){
        var xmlhhtp;
	    var denumirePopulara=document.getElementById('denumirePopulara');
        var value=denumirePopulara.value;
        	if(denumirePopulara.value != ""){
        			if(window.XMLHttpRequest){
        				xmlhhtp = new XMLHttpRequest();
        			}else{
        				xmlhhtp = new ActiveXObject("Microsoft.XMLHTTP");
        			}
					xmlhhtp.onreadystatechange = function(){
        			if(xmlhhtp.readyState==4 && xmlhhtp.status==200){
        				document.getElementById("status").innerHTML=xmlhhtp.responseText;
        			}
        		};
        	xmlhhtp.open("GET","existFlower.php?denumirePopulara="+encodeURIComponent(denumirePopulara.value),true);
        	xmlhhtp.send();
        	}
	};

function checkId(obj){
        var xmlhhtp;
        var id_detalii = document.getElementById('idDetalii');
        var value = id_detalii.value;
        	if(id_detalii.value != ""){
        		if(window.XMLHttpRequest){
        			xmlhhtp = new XMLHttpRequest();
        		}else{
        			xmlhhtp = new ActiveXObject("Microsoft.XMLHTTP");
        		}
        		xmlhhtp.onreadystatechange = function(){
        			if(xmlhhtp.readyState==4 && xmlhhtp.status==200){
        				document.getElementById("status1").innerHTML=xmlhhtp.responseText;
        			}
        		};
        	xmlhhtp.open("GET","checkIdDetalii.php?id_detalii="+encodeURIComponent(id_detalii.value),true);
        	xmlhhtp.send();
        }
    };