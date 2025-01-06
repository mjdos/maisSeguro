@include('painel.layout.header')

	<h1>&nbsp;&nbsp;&nbsp;Mapa de Informações </h1>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<style>
        /* Define a altura do mapa */
        #map {
            height: 700px;
            width: 100%;
        }
    </style>
	
<div class="content d-flex flex-column flex-column-fluid" style="padding: 30px !important" id="kt_content">
		<!-- REFERENCIA https://leafletjs.com/examples/quick-start/ -->
		<div class="row g-5 g-xl-8" style="padding-top: 0px important!;">
			 <div id="map"></div>
		</div>
</div>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
	var map = L.map('map').setView([-15.840325, -48.064856], 12); 

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	var circle = L.circle([-15.8019182, -48.1078942], {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5,
		radius: 500,
	}).addTo(map);

	var locations = [
		{ lat: -15.7903485, lng: -48.1362327, title: '1 ocorrencia' },  
		{ lat: -15.8097857, lng: -48.1305082, title: '2 ocorrencia' },
		{ lat: -15.8028956, lng: -48.1647563, title: '3 ocorrencia' },  
		{ lat: -15.7987248, lng: -48.1097178, title: '4 ocorrencia' },  
		{ lat: -15.8019182, lng: -48.1078942, title: '5 ocorrencia' },  
		{ lat: -15.800568, lng: -48.109445, title: '6 ocorrencia' },  
		{ lat: -15.8926488, lng: -48.1461219, title: '7 ocorrencia' },  
	];

	locations.forEach(function(location) {
		L.marker([location.lat, location.lng]).addTo(map)
			.bindPopup('<b>' + location.title + '</b>')
			.openPopup();
	});

	
</script>
@include('painel.layout.footer')