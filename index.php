<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0" />
  <title>Google map test</title>
  <style>
    html {
      height: 100%
    }
    body {
      height: 100%;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }
    #map {
      height: 100%
    }
  </style>
</head>

<body>
  <div id="map"></div>
  <script>
    var map;
    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: new google.maps.LatLng(0, 0),
        zoom: 2
      });
    }
    function initialize() {
      initMap();
    }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiGx7P4F3UQ65gJ2wksoVFLz-FGRMCmsA&callback=initialize"></script>
</body>

</html>