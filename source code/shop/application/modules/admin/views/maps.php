<div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 20.98938, lng: 7, 105.795508};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnCHkkc2vj4AuIP0TkiZHtYrHeQFnbafo&callback=initMap">
    </script>