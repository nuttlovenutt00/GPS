

        <script type="text/javascript" src="https://api.longdo.com/map/?key=05431d206b12178770f382c7a50f50a1 "></script>
        <script>

          function init() {
            map = new longdo.Map({
              placeholder: document.getElementById('map')
            });
            map.location(longdo.LocationMode.Geolocation);
            var result = map.location();
            ghk();
          }
         function ghk(){
            map.location(longdo.LocationMode.Geolocation);
            var result = map.location(); 
            
            document.getElementById('gps1').value=result['lat']+","+result['lon'];
            var gps = result['lat']+","+result['lon'];
          }
        </script>
    </head>
    <body onload="init();">
      <input type="hidden" name="gps1" id="gps1" value="">
    </body>

