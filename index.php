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
           get();
          }

          function get(){
              map.location(longdo.LocationMode.Geolocation);
            var result = map.location();
            console.log(result);
            document.getElementById('gps1').value=result["lon"]+","+result["lat"];
          }
        </script>
    </head>
    <body onload="init();">
        <div id="map" style="height: 50%;display: none"></div>
        <input type="hidden" id="gps1" value="">
        <button onclick="get()">test</button>
    </body>
  </html>