 function changeSeason(obj){
        var xmlhhtp;
        var categ=obj.options[obj.selectedIndex];
        var value=categ.value;
        	if(categ.value!=""){
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
			
			var sel = document.getElementById("s1");
			var myvar = sel.options[sel.selectedIndex].id;
			
        	xmlhhtp.open("GET","drop.php?anotimp="+encodeURIComponent(categ.value),true);
        	xmlhhtp.send();
		}
  };
  
   function changeOrigin(obj){
        var xmlhhtp;
        var categ=obj.options[obj.selectedIndex];
        var value=categ.value;
        	if(categ.value!=""){
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
        	xmlhhtp.open("GET","drop.php?origin="+encodeURIComponent(categ.value),true);
        	xmlhhtp.send();
		}
  };