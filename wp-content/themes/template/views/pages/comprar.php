<div class="container wmax">
	<div class="row">
		<div id="map-canvas" class="sinEspacio col-xs-12 col-md-9">
			<!-- map -->
		</div>
	</div>
</div>
<script>
function initialize() {
	// Creamos el Mapa
	var map = new google.maps.Map(
document.getElementById('map-canvas'), {
center: new google.maps.LatLng(19.08853433,-98.32209365),
zoom: 11,
mapTypeId: google.maps.MapTypeId.ROADMAP
});
	// Definimos la imagen del Marker
	var image = '../wp-content/themes/template/assets/img/red.png';
	// Agregamos el pin
	var marker1 = new google.maps.Marker({
		position: new google.maps.LatLng(19.0471353,-98.208313),
		map: map,
		icon: image,
		title: 'Paseo Bravo.',
		clickable: true
	});
	// Creamos el popup con la informacion de la sucursal
	marker1.info = new google.maps.InfoWindow({
	content: '<b>Paseo Bravo.:</b>'
	});
	// Creamos la interaccion con el boton
	google.maps.event.addListener(marker1, 'click', function() {
		marker1.info.open(map, marker1);
	});
	// Agregamos el pin
	var marker2 = new google.maps.Marker({
		position: new google.maps.LatLng(19.044383,-98.1947624),
		map: map,
		icon: image,
		title: '4 Oriente.',
		clickable: true
	});
	// Creamos el popup con la informacion de la sucursal
	marker2.info = new google.maps.InfoWindow({
	content: '<b>4 Oriente.:</b>'
	});
	// Creamos la interaccion con el boton
	google.maps.event.addListener(marker2, 'click', function() {
		marker2.info.open(map, marker2);
	});
	// Agregamos el pin
	var marker3 = new google.maps.Marker({
		position: new google.maps.LatLng(19.0474737,-98.2162648),
		map: map,
		icon: image,
		title: 'Upaep.',
		clickable: true
	});
	// Creamos el popup con la informacion de la sucursal
	marker3.info = new google.maps.InfoWindow({
	content: '<b>Upaep.:</b>'
	});
	// Creamos la interaccion con el boton
	google.maps.event.addListener(marker3, 'click', function() {
		marker3.info.open(map, marker3);
	});
	// Agregamos el pin
	var marker4 = new google.maps.Marker({
		position: new google.maps.LatLng(19.0536175,-98.2224277),
		map: map,
		icon: image,
		title: 'Los Frailes.',
		clickable: true
	});
	// Creamos el popup con la informacion de la sucursal
	marker4.info = new google.maps.InfoWindow({
	content: '<b>Los Frailes.:</b>'
	});
	// Creamos la interaccion con el boton
	google.maps.event.addListener(marker4, 'click', function() {
		marker4.info.open(map, marker4);
	});
	// Agregamos el pin
	var marker5 = new google.maps.Marker({
		position: new google.maps.LatLng(19.0413822,-98.1965368),
		map: map,
		icon: image,
		title: 'Los Sapos.',
		clickable: true
	});
	// Creamos el popup con la informacion de la sucursal
	marker5.info = new google.maps.InfoWindow({
	content: '<b>Los Sapos.:</b>'
	});
	// Creamos la interaccion con el boton
	google.maps.event.addListener(marker5, 'click', function() {
		marker5.info.open(map, marker5);
	});
	// Agregamos el pin
	var marker6 = new google.maps.Marker({
		position: new google.maps.LatLng(19.0333257,-98.1867878),
		map: map,
		icon: image,
		title: 'Finanzas.',
		clickable: true
	});
	// Creamos el popup con la informacion de la sucursal
	marker6.info = new google.maps.InfoWindow({
	content: '<b>Finanzas.:</b>'
	});
	// Creamos la interaccion con el boton
	google.maps.event.addListener(marker6, 'click', function() {
		marker6.info.open(map, marker6);
	});
	// Agregamos el pin
	var marker7 = new google.maps.Marker({
		position: new google.maps.LatLng(19.054289,-98.283863),
		map: map,
		icon: image,
		title: 'Udla.',
		clickable: true
	});
	// Creamos el popup con la informacion de la sucursal
	marker7.info = new google.maps.InfoWindow({
	content: '<b>Udla.:</b>'
	});
	// Creamos la interaccion con el boton
	google.maps.event.addListener(marker7, 'click', function() {
		marker7.info.open(map, marker7);
	});
	// Agregamos el pin
	var marker8 = new google.maps.Marker({
		position: new google.maps.LatLng(19.05384,-98.28302),
		map: map,
		icon: image,
		title: '�gora.',
		clickable: true
	});
	// Creamos el popup con la informacion de la sucursal
	marker8.info = new google.maps.InfoWindow({
	content: '<b>�gora.:</b>'
	});
	// Creamos la interaccion con el boton
	google.maps.event.addListener(marker8, 'click', function() {
		marker8.info.open(map, marker8);
	});
	// Agregamos el pin
	var marker9 = new google.maps.Marker({
		position: new google.maps.LatLng(19.04743,-98.21632),
		map: map,
		icon: image,
		title: 'Upaep 2.',
		clickable: true
	});
	// Creamos el popup con la informacion de la sucursal
	marker9.info = new google.maps.InfoWindow({
	content: '<b>Upaep 2.:</b>'
	});
	// Creamos la interaccion con el boton
	google.maps.event.addListener(marker9, 'click', function() {
		marker9.info.open(map, marker9);
	});
	// Agregamos el pin
	var marker10 = new google.maps.Marker({
		position: new google.maps.LatLng(19.4624669,-99.212641),
		map: map,
		icon: image,
		title: 'Papagayo.',
		clickable: true
	});
	// Creamos el popup con la informacion de la sucursal
	marker10.info = new google.maps.InfoWindow({
	content: '<b>Papagayo.:</b>'
	});
	// Creamos la interaccion con el boton
	google.maps.event.addListener(marker10, 'click', function() {
		marker10.info.open(map, marker10);
	});
}
function loadScript() {
var script = document.createElement('script');
script.type = 'text/javascript';
script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&' +
'callback=initialize';
document.body.appendChild(script);
}
	window.onload = loadScript;
</script>