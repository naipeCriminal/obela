<div class="container wmax" id="comprar">
	<div class="row">
		<div id="map-canvas" class="col-xs-12 col-md-9">
			<!-- map -->
		</div>
		<div class="col-md-3">
			<div class="placescontainer">
				<ul class="places">
				</ul>
			</div>
			<div class="selectorcontainer">
				<p>Selecciona un estado</p>
				<p>
					<select class="form-control" id="available-states">
						<option value="" disabled>Estado</option>
					</select>
				</p>
				<p>Selecciona una ciudad</p>
				<p>
					<select class="form-control" id="available-cities">
						<option value="" disabled>Ciudad</option>
					</select>
				</p>
				<p>
					<input type="button" id="buscar-tiendas" value="Buscar" class="form-control">
				</p>
			</div>
		</div>
	</div>
	<div id="elastic-grid" class="row">
		<canvas id="canvas"></canvas>
		<div class="col-md-3 grid overeable">
			<a href="/comprar">
				<div class="grid-over full">
					<div class="table">
						<div class="cell-center text-center">
							<p class="obelaizer">Encuentra un</p>
							<p class="obelaizer">punto de venta</p>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 grid">
			<a href="https://www.facebook.com/ObelaMX" target="_blank">
				<div class="table">
					<div class="cell-center text-center">
						<p class="obelaizer">Prueba Obela®</p>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/obela-trucks.png" alt="" style="margin-top:20px;">
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 grid overeable">
			<a href="/recetas">
				<div class="grid-over full">
					<div class="table">
						<div class="cell-center text-center">
							<p class="obelaizer">¡Participa!</p>
							<p class="obelaizer">en las</p>
							<p class="obelaizer">dinámicas</p>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fb-icon-compras.png" alt="" style="margin-top:20px;">
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 grid overeable">
			<a href="/contacto">
				<div class="table">
					<div class="cell-center text-center">
						<p class="obelaizer">Contáctanos</p>
					</div>
				</div>
			</a>
		</div>
	</div>
	<script>
	var colors = ["#a2052c", "#f1ece7", "#ffa000", "#2d6d00"];
	var elasticGrid = true;
	var options = {
		colors: ["#a3052d", "#dc022a", "#ff6800", "#ffa000"],
		squares: {
			full: {
				squaresX: 4,
				squaresY: 1
			},
			mobile: {
				squaresX: 1,
				squaresY: 4
			}
		}
	};
	</script>
	<script src="//maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/places.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/map.js"></script>