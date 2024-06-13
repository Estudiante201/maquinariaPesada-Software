<?php

            include("./modelo/conexion.php");

			$id=$_GET['id'];

			
			$sql=$conexion->query("SELECT * FROM equipos where idEquipo='".$id."'");
			
			$datos=mysqli_fetch_array($sql);
			
			$codigoEquipo=$datos["codigoEquipo"];
			$nombreEquipo=$datos["nombreEquipo"];
			$marca=$datos['marca'];
			$modelo=$datos['modelo'];
			$serie=$datos['serie'];
           
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
							<a href="equipo.php"><i class="fas fa-tractor fa-fw"></i> &nbsp; Equipo</a>
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
				<div>
                <h3 style="text-align:center; font-weight:bold;">
                    &nbsp; Editar Equipo
                </h3>
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
										<input type="text" style="width:100%; color:#B2BABB; font-weight:bold" name="codigoEquipo" value="<?php echo $codigoEquipo ?>">
									</div>
								</div>
								
								<div class="col-12 col-md-4">
									<div class="form-group">
										<labe>Equipo</label>
										<input type="text" style="width:100%" name="nombreEquipo" value="<?php echo $nombreEquipo ?>" required>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label>Marca</label>
										<input type="text" style="width:100%" name="marca" value="<?php echo $marca ?>" required>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label>Modelo</label>
										<input type="text" style="width:100%" name="modelo" value="<?php echo $modelo ?>" required>
									</div>
								</div>	
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label>Serie</label>
										<input type="text" style="width:100%" name="serie" value="<?php echo $serie ?>" required>
									</div>
								</div>						
							</div>
						</div>

						<input type="hidden" name="id" value="<?php echo $id; ?>">

					</fieldset>
					
					<p class="text-center" style="margin-top: 40px;">
			            <button type="button" onclick="history.back()" name="volver atrás" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; volver atrás</button>
						&nbsp; &nbsp;
						<button type="submit" name="btnActualizar" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; Actualizar</button>
					</p>

			<?php
            include("./modelo/backend_editarequipo.php");
            ?>

				</form>
			</div>
        </section>




    </main>
    
    	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="./js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="./js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="./js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="./js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="./js/main.js" ></script>
</body>
</html>