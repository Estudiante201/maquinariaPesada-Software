<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Home</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./modelo_home/css/normalize.css">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="./modelo_home/css/bootstrap.min.css">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="./modelo_home/css/bootstrap-material-design.min.css">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="./modelo_home/css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="./modelo_home/css/sweetalert2.min.css">

	<!-- Sweet Alert V8.13.0 JS file-->
    <script src="./modelo_home/js/sweetalert2.all.min.js"></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="./modelo_home/css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="./modelo_home/css/style.css">


</head>
<body>
	
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="./modelo_home/assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
					   <?php echo $_SESSION['nombreCompleto'] ?> <br><small class="roboto-condensed-light">Usuario: <?php echo $_SESSION['usuario'] ?></small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="home.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-tractor fa-fw"></i> &nbsp; Equipo <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="equipo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo Equipo</a>
								</li>
								<li>
								    <a href="lista_equipo.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista Equipo</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Mantenimiento <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="manten_correctivo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Manten. correctivo</a>
								</li>
								<li>
									<a href="client-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Manten. preventivo</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Reporte <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="item-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Programa de Mantenimiento</a>
								</li>
								<li>
									<a href="item-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista Manten.</a>
								</li>
								<li>
									<a href="item-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista Estado de Manten.</a>
								</li>
								<li>
									<a href="item-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar item</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Consulta <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="reservation-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo préstamo</a>
								</li>
								<li>
									<a href="reservation-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de préstamos</a>
								</li>
								<li>
									<a href="reservation-search.html"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar préstamos</a>
								</li>
								<li>
									<a href="reservation-pending.html"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; Préstamos pendientes</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Usuarios <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="nuevo_usuario.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo usuario</a>
								</li>
								<li>
									<a href="user-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</a>
								</li>
								<li>
									<a href="user-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="company.html"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Empresa</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>

		<!-- Page content -->
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral">
					<i class="fas fa-exchange-alt"></i>
				</a>
				<a href="user-update.html">
					<i class="fas fa-user-cog"></i>
				</a>
				<a href="index.php">
					<i class="fas fa-power-off"></i>
				</a>
			</nav>

			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fab fa-dashcube fa-fw"></i> &nbsp; LISTA ESTADO DE MANTENIMIENTO
				</h3>
				<p class="text-justify">
					<b>Atunga Multiservicios & Asociados E.I.R.L</b> -- Reparación y Mantenimiento de Maquinaria Pesada.
				</p>
			</div>
			
			<!-- Content -->
			<div class="full-box tile-container">

				<a href="client-new.html" class="tile">
					<div class="tile-tittle">Programado</div>
					<div class="tile-icon">
						<i class="fas fa-calendar fa-fw"></i>
						<p>5 Registrados</p>
					</div>
				</a>

				<a href="item-list.html" class="tile">
					<div class="tile-tittle">Espera</div>
					<div class="tile-icon">
						<i class="fas fa-hourglass-start fa-fw"></i>
						<p>9 Registrados</p>
					</div>
				</a>

				<a href="reservation-list.html" class="tile">
					<div class="tile-tittle">Proceso</div>
					<div class="tile-icon">
						<i class="fas fa-recycle"></i>
						<p>10 Registrados</p>
					</div>
				</a>

				<a href="user-list.html" class="tile">
					<div class="tile-tittle">Atrasado</div>
					<div class="tile-icon">
						<i class="fas fa-clock fa-fw"></i>
						<p>50 Registrados</p>
					</div>
				</a>

				<a href="company.html" class="tile">
					<div class="tile-tittle">Realizado</div>
					<div class="tile-icon">
						<i class="fas fa-check fa-fw"></i>
						<p>1 Registrada</p>
					</div>
				</a>
				
			</div>
			

		</section>
	</main>
	
	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="./modelo_home/js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="./modelo_home/js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="./modelo_home/js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./modelo_home/js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="./modelo_home/js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="./modelo_home/js/main.js" ></script>
</body>
</html>