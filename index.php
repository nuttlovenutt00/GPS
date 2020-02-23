
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
            height: 20%;
            width: 50%
          }
        </style>

        <script type="text/javascript" src="https://api.longdo.com/map/?key=05431d206b12178770f382c7a50f50a1 "></script>
        <script>
          function init() {
            map = new longdo.Map({
              placeholder: document.getElementById('map')
            });
            
          }
           
          

          function ghk(){
            map.location(longdo.LocationMode.Geolocation);
            var result = map.location();
            console.log(result);
            document.getElementById('show').value=result['lat']+","+result['lon'];
          }
        </script>
    </head>
    <body onload="ghk();">
        <div id="map"></div>
         <div id="map"></div>
        <button onclick="ghk()">Geolocation</button>
        <input type="text" value="" id="show">
    </body>
  </html>
