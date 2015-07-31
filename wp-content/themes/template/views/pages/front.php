<div class="container wmax" id="home">
	<div class="row">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/maqueta/slider.jpg" class="img-responsive">
	</div>
	<!-- <div class="container wmax"> -->
	<div id="elastic-grid" class="row">
		<canvas id="canvas"></canvas>
		<div class="col-md-3 grid overeable">
			<a href="/productos">
				<div class="grid-over full">
					<div class="table">
						<div class="cell-center text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/obela_home_sabores.png" alt="">
							<p class="obelaizer">Nuestros</p>
							<p class="obelaizer">sabores</p>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 grid">
			<div class="table">
				<div class="cell-center text-center">
					<p class="obelaizer cherry">Somos</p>
					<p class="obelaizer cherry">Kosher</p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/kosher.png" alt="" style="margin-top:20px;">
				</div>
			</div>
		</div>
		<div class="col-md-3 grid overeable">
			<a href="/recetas">
				<div class="grid-over full">
					<div class="table">
						<div class="cell-center text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/obela_home_cocina.png" alt="">
							<p class="obelaizer cherry">Cocina</p>
							<p class="obelaizer cherry">Obela®</p>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 grid overeable">
			<a href="#" data-toggle="modal" data-target="#modal-pruebalo">
				<div class="table">
					<div class="cell-center text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/obela_smile.png" style="margin-bottom:20px;">
						<p class="obelaizer">¡Ya pruébalo!</p>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 grid overeable">
			<a href="#" data-toggle="modal" data-target="#modal-queesobela">
				<div class="grid-over full">
					<div class="table">
						<div class="cell-center text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/obela_home_obela.png" alt="">
							<p class="obelaizer">¿Qué es</p>
							<p class="obelaizer yellow">Obela®?</p>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 grid overeable">
			<a href="#" data-toggle="modal" data-target="#modal-hummus">
				<div class="grid-over full">
					<div class="table">
						<div class="cell-bottom text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/obela_home_hummus.png" alt="">
							<p class="obelaizer">Todo sobre</p>
							<p class="obelaizer yellow">el Hummus</p>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 grid">
			<a href="#">
				<div class="table">
					<div class="cell-center text-center">
						<p class="obelaizer">¡Síguenos!</p>
						<div class="container-networks">
							<a href="https://www.facebook.com/ObelaMX" target="_blank">
								<div class="icon-network">
									<span class="icon fb-icon"></span>
								</div>
							</a>
							<a href="https://twitter.com/Obela_Mx" target="_blank">
								<div class="icon-network">
									<span class="icon tw-icon"></span>
								</div>
							</a>
							<a href="https://instagram.com/obela_mx/" target="_blank">
								<div class="icon-network">
									<span class="icon ig-icon"></span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 grid">
			<div class="grid-over full">
				<div class="table">
					<div class="cell-center text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/obela_home_delicioso.png" alt="">
						<p class="obelaizer">Delicioso,</p>
						<p class="obelaizer yellow">nutritivo</p>
						<p class="obelaizer">versátil</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- </div> -->
</div>
<script>
var colors = ["#a2052c", "#f1ece7", "#ffa000", "#2d6d00", "#ff6800", "#2d6d00", "#dc022a", "#817c00"];
var elasticGrid = true;
</script>
<?php require("modals.php") ?>