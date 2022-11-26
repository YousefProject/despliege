@extends('home')

@section('cuerpo')
<div class="fondo">
<div class="lugar"> 
	<h1>
	Parque Central Leon Nicaragua
</h1>
</div>

<div class="grid-gallery">
    <a class="grid-gallery__item" href="#">
        <img class="grid-gallery__image" src="./2.jpeg">
    </a>
    <a class="grid-gallery__item" href="#">
        <img class="grid-gallery__image" src="./3.jpeg">
    </a>

	<a class="grid-gallery__item" href="#">
        <img class="grid-gallery__image" src="./4.jpeg">
    </a>
	
	<a class="grid-gallery__item" href="#">
        <img class="grid-gallery__image" src="./5.jpeg">
    </a>
	
	<a class="grid-gallery__item" href="#">
        <img class="grid-gallery__image" src="./6.jpeg">
    </a>
	
    </a>
	<a class="grid-gallery__item" href="#">
        <img class="grid-gallery__image" src="./7.jpeg">
		

    </a>

	
	
    
</div>

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
zoom: 15,
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

<div class="texto">
	<div class="t1"></div>
	<p>
	En 1610, la Plaza Mayor de León se convirtió en el núcleo fundacional de la ciudad en su nuevo asentamiento.<br>
	Su esquema corresponde a las Ordenanzas de Nueva Población dictadas en 1573 por Felipe II. <br>
	Se caracteriza por su diversidad arquitectónica y una belleza excepcional. Justo en la plaza se encuentran la propia Catedral de León, la Alcaldía Municipal de León, el Colegio y Capilla La Asunción (antiguo Palacio Episcopal) y el Antiguo Palacio Departamental (hoy Museo de la Revolución).
	</p>
</div>

</div>



@endsection