<!DOCTYPE HTML>
  <html>
    <head>
        <meta charset="UTF-8">
        <title>Map Location Sample | Longdo Map</title>
        <style type="text/css">
          html{
            height:100%; 
          }
          body{ 
            margin:0px;
            height:100%; 
          }
          #map {
            height: 100%;
          }
        </style>

        <script type="text/javascript" src="https://api.longdo.com/map/?key=05431d206b12178770f382c7a50f50a1"></script>
        <script>
          function init() {
            map = new longdo.Map({
              placeholder: document.getElementById('map')
            });
            map.location({ lon:100, lat:16 }, true); // go to 100, 16 when created map
          }

          function get(){
            map.location(longdo.LocationMode.Geolocation);
          }
        </script>
    </head>
    <body onload="init();">
        <div id="map" style="height: 50%"></div>
        <button onclick="get()">test</button>
    </body>
  </html>