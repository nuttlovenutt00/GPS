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

        <script type="text/javascript" src="https://api.longdo.com/map/?key=[YOUR_KEY_API]"></script>
        <script>
          function init() {
            map = new longdo.Map({
              placeholder: document.getElementById('map')
            });
            map.location({ lon:100, lat:16 }, true); // go to 100, 16 when created map
          }
        </script>
    </head>
    <body onload="init();">
        <div id="map"></div>
    </body>
  </html>