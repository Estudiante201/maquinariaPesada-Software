<?php

            include("./modelo/conexion.php");

			$generarCodigo="1001";

			$sql=$conexion->query("SELECT idEquipo FROM equipos ORDER BY idEquipo DESC LIMIT 1");
			if($datos=$sql->fetch_object()){
				$generarCodigo =$datos->idEquipo + 1001;
			}
           
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Nuevo item</title>

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
                        Carlos Alfaro <br><small class="roboto-condensed-light">Web Developer</small>
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
							<a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Historial <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="item-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar item</a>
								</li>
								<li>
									<a href="item-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de items</a>
								</li>
								<li>
									<a href="item-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar item</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Informe <i class="fas fa-chevron-down"></i></a>
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
									<a href="user-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo usuario</a>
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
        <section class="full-box page-content">
            <nav class="full-box navbar-info">
                <a href="#" class="float-left show-nav-lateral">
                    <i class="fas fa-exchange-alt"></i>
                </a>
                <a href="user-update.html">
                    <i class="fas fa-user-cog"></i>
                </a>
                <a href="#" class="btn-exit-system">
                    <i class="fas fa-power-off"></i>
                </a>
            </nav>
            <!-- Page header -->
            <!--
				<div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR Equipo
                </h3>
            </div>
			-->

            <div>
				<ul class="full-box list-unstyled page-nav-tabs" style="margin:0; padding:0">
					<li  style="margin:0; padding:0">
						<a class="active" href="equipo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO EQUIPO</a>
					</li>
					<li  style="margin:0; padding:0">
						<a href="lista_equipo.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE EQUIPO</a>
					</li>
				</ul>	
			</div>
            
            <!--CONTENT-->
            <div class="container-fluid">
				<form action="" method="POST" class="form-neon" autocomplete="off">
			
					<fieldset>
						<legend><i class="far fa-plus-square"></i> &nbsp; Información del Equipo</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label>Codigo de equipo</label>
										<input type="text" style="width:100%; color:#B2BABB; font-weight:bold" name="codigoEquipo" value="EQ-<?php echo $generarCodigo ?>">
									</div>
								</div>
								
								<div class="col-12 col-md-4">
									<div class="form-group">
										<labe>Equipo</label>
										<input type="text" style="width:100%" name="nombreEquipo" required>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label>Marca</label>
										<input type="text" style="width:100%" name="marca" required>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label>Modelo</label>
										<input type="text" style="width:100%" name="modelo" required>
									</div>
								</div>	
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label>Serie</label>
										<input type="text" style="width:100%" name="serie" required>
									</div>
								</div>						
							</div>
						</div>
					</fieldset>
					
					<p class="text-center" style="margin-top: 40px;">
			            <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
						&nbsp; &nbsp;
						<button type="submit" name="btnguardar" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
					</p>
					
			<?php
            include("./modelo/backend_nuevoequipo.php");
            ?>
				</form>
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
	<script src="./js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="./js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="./modelo_home/js/main.js" ></script>
</body>
</html>