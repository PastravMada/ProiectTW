<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <link rel="shortcut icon" href="logo.ico" />
  <link href="css/contact-us.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" type="text/css" href="Incluziuni/incluziuni.css">
 <link rel="stylesheet" href="Admin/cssMenu/layout.css" type="text/css" media="screen">
 <link rel="stylesheet" href="Admin/cssMenu/menu.css" type="text/css" media="screen">
 <script
src="http://maps.googleapis.com/maps/api/js">
</script>
 <script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(47.1585,27.6014),
    zoom:12,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
  var marker = new google.maps.Marker({
    position: new google.maps.LatLng( 47.174541, 27.574825),
    map: map,
    title: 'Hello World!'
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head> 
<body  background="back1.jpg">
	<?php include('Incluziuni/header.php');?>


<div style="margin-top: 2% " align="center" >
<p>TELEFON: 021 410 91 39 (luni-vineri 07:30 - 15:30)</p>
<p>E-MAIL: gradinabotanica@yahoo.com </p>
<br/><br/>

<h4>PROGRAM</h4>
<p>zilnic intre orele 08-20 (1 aprilie-31 octombrie)</p>
<br/><br/>
  <h4>BILET INTRARE GRADINA BOTANICA</h4>
<p>Intrarea este gratuita pentru prescolari si studenti

	<ul>Spatiile exterioare ale Gradinii Botanice
		<li>bilet intreg: 5 ron</li>
		<li>bilet redus: 2 ron</li>
	</ul>
	<ul>Sere
		<li>bilet intreg: 2 ron</li>
		<li>bilet redus: 1 ron</li>
	</ul>
<p>Bilete reduse: pensionari, elevi, studenti</p>
<p>Abonament lunar (intrari nelimitate in Gradina Botanica timp de o luna calendaristica): 40 ron</p>
</p>
<br/><br/>
<h4>LOCALIZARE</h4>
<div id="googleMap" style="width:500px;height:380px;"></div>
</div>

</body>
</html>


