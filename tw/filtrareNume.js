 function changeName(){
 	debugger;
       
        var value=document.getElementById("inputDenumire").value;
        	if(value!="" || value != null){
        		if(window.XMLHttpRequest){
        			xmlhhtp=new XMLHttpRequest();
        		}else{
        			xmlhhtp=new ActiveXObject("Microsoft.XMLHTTP");
        		}
        		xmlhhtp.onreadystatechange=function(){
        			if(xmlhhtp.readyState==4 && xmlhhtp.status==200){
        				document.getElementById("status1").innerHTML=xmlhhtp.responseText;
        			}
        		};
			
			
        	xmlhhtp.open("GET","filterName.php?denumire="+encodeURIComponent(value),true);
        	xmlhhtp.send();
		}
  };