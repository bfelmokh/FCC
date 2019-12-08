<!-- Ces scripts doivent être inclus dans la page appelante (index) -->
  <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script src="js/gmaps.js"></script>

  <style>
	#ma_carte {
	  width: 400px;
	  height: 400px;
	}  
  </style>
  
  <div id="ma_carte"></div>
  
  <script>
  var latitude = 35.833271;
  var longitude = 10.638798;
    var map = new GMaps({
      div: '#ma_carte',
      lat: latitude,
      lng: longitude
    });
      map.addMarker({
		  lat: latitude,
		  lng: longitude,
		  title: 'Sousse',
        infoWindow: {
		  content: 'Ceci est un <u> contenu HTML </u>'
        }
      });
  </script>
  
  