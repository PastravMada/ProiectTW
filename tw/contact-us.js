 var locations = [
      ['Suceava,Romania', 47.65138899999999, 26.255556, 4],
      ['Bucuresti, Romania', 44.4226 , 26.1237, 5],
      ['Iasi,Romania', 47.1768587, 27.5742789, 3],
      ['Budapest, Hungary', 47.4925, 19.0514, 2],
      ['Lyon, Franta', 45.7600,  4.8400, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 5,
      center: new google.maps.LatLng(47.17, 27.57),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }

    