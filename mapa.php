
<html>
<?php include 'encabezado.html';?>
<head>

<meta charset=""utf-8>
    <title>Geolocation</title>

    <style media="screen">
        .google_canvas{
        align-content: center;
	height: 500px;
	width: 50%;
        }
    

    </style>
</head>
<body>
<br>
<br>
<br>
<br>
    <h1>Ubicacion</h1>
    
<div id="google_canvas" class="google_canvas"></div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBifgp2lRwh_iPLprdXSW9qPvulK3KOZ3I&callback=iniciarMap"></script>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
    (function(){
        var directionsDisplay = new google.maps.DirectionsRenderer({polylineOptions:{strokeColor:'#2E9AFE'}});
        var directionsService = new google.maps.DirectionsService();
    if(!!navigator.geolocation){
            var ubicacionLugar = {lat:31.708265 ,lng: -116.545983};
            var map;
            var mapOptions={
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

        map = new google.maps.Map(document.getElementById("google_canvas"), mapOptions);

            navigator.geolocation.getCurrentPosition(function(position){
            var geolocate = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

            
            var marker = new google.maps.Marker({
                map: map,
                position: geolocate,
                title: 'MI UBICACION',
                content:
                position.coords.latitude+position.coords.longitude
            }
            
            );
            var marker2 = new google.maps.Marker({
                position: ubicacionLugar,
                map: map
            }




            /*var infoWindow = new google.maps.InfoWindow({
                map: map,
                position: geolocate,
                content:
                '<h1>Esta tu ubicacion con Geolocation</h1>'+
                '<h2>Latitud: '+position.coords.latitude+'</h2>'+
                '<h2>Longitud: '+position.coords.longitude+'</h2>'
            }*/
            
       
    
    
    );
            map.setCenter(geolocate);
        });


    }



    
    else{
        document.getElementById("google_canvas").innerHTML = "No se soporta geolocalizacion";

    }


    
})();   
</script>
 
</body>

   

</html>