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
           
          }

          function get(){
            map.location(longdo.LocationMode.Geolocation);
            var result = map.location();
            console.log(result);
          }
        </script>
    </head>
    <body onload="init();">
        <input type="text" id="getgps" value="">
        <button onclick="get()">test</button>
    </body>
  </html>