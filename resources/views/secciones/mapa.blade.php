@extends('home')

@section('cuerpo')
 
<body>
  <style> 
  #map
{
    height: 100%;
    padding: 20%;
    border: 40px;
    margin: 50px;
    margin-left: 25%;
}

@media (max-width: 700px){
    header{
        flex-direction:column ;
    }
    nav{
        padding: 10px 0px;
    }
    }
  </style>




  <div class="fondo">
<div id="map"></div>
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuh6EOyKaaRSjAAzdPDn8TjcSbADwviDo&callback=initMap&v=weekly"
  defer
></script>
<script>
    let map;

function initMap() {
map = new google.maps.Map(document.getElementById("map"), {
center: { lat:	12.43787,   lng: -86.87804 },
zoom: 9,
});
}

window.initMap = initMap;
</script>

<script>
// Iniciando y agregando el mapa
function initMap() {
// localizacion mediante uluru
const uluru = { lat: 12.4353507, lng: -86.8772869 };

const map = new google.maps.Map(document.getElementById("map"), {
zoom: 7,
center: uluru,
});
// Marcador de ubicacion
const marker = new google.maps.Marker({
position: uluru,
map: map,


});
}


window.initMap = initMap;
</script>


    
</body>
</div>
@endsection