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

	
	<link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">


</head>


<body>

<script>
	function eliminar(){
		var respuesta=confirm("Estas seguro que desea eliminar?");
		return respuesta;
	}
</script>

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
			<div >
				<h3 class="text-left">
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE EQUIPO
				</h3>
			</div>
			-->

			<div>
				<ul class="full-box list-unstyled page-nav-tabs" style="margin:0; padding:0">
					<li  style="margin:0; padding:0">
						<a href="manten_correctivo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO MANTENIMIENTO CORRECTIVO</a>
					</li>
					<li  style="margin:0; padding:0">
						<a href="#"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO MANTENIMIENTO PREVENTIVO</a>
					</li>
					<li  style="margin:0; padding:0">
						<a class="active" href="lista_mant_correctivo.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA MANTEN. CORRECTIVO</a>
					</li>
				</ul>	
			</div>
			
			<!-- Content here-->
			<div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm" id="myTable">
						<thead>
							<tr>
							    <th style="text-align: center;">Orden#</th>
							    <th style="text-align: center;">Fech.Emision</th>
								<th style="text-align: center;">Cod.Equip</th>
								<th style="text-align: center;">EQUIPO</th>
								<th style="text-align: center;">Diagnostico</th>
								<th style="text-align: center;">Actividad</th>
								<th style="text-align: center;">Tecnico</th>
								<th style="text-align: center;">Fech.Inicio</th>
								<th style="text-align: center;">Fech.Final</th>
								<th style="text-align: center; font-size:14px;">update</th>
								<th style="text-align: center; font-size:14px;">delete</th>
							</tr>
						</thead>

						<tbody>
		
     <?php
            include("./modelo/conexion.php");

			$sql=$conexion->query("SELECT * FROM mantcorrectivo mc, equipos eq WHERE mc.idEquipo = eq.idEquipo");
			
			while ($resultado=mysqli_fetch_array($sql)) {

    ?>

	       <tr class="text-center" >
		        <td><?php echo $resultado['numOrden']; ?></td>
				<td><?php echo $resultado['fechaEmision']; ?></td>
	            <td><?php echo $resultado['codigoEquipo']; ?></td>
				<td><?php echo $resultado['nombreEquipo']; ?></td>

				<td><?php echo $resultado['diagnostico']; ?></td>
				<td><?php echo $resultado['actividad']; ?></td>
				<td><?php echo $resultado['nomTecnico']; ?></td>
				<td><?php echo $resultado['fechaInicio']; ?></td>
				<td><?php echo $resultado['fechaFinal']; ?></td>


				<td style="text-align:center;">
					<?php echo "<a href='editar_manten_correctivo.php?id=".$resultado['idMantCorrectivo']."' class='btn btn-success' ><i class='fas fa-sync-alt'></i></a>"; ?>
				</td>

				<td style="text-align:center;">
					<?php echo "<a href='./modelo/backend_eliminar_mant_correct.php?id=".$resultado['idMantCorrectivo']."' class='btn btn-warning' onclick='return eliminar()'><i class='far fa-trash-alt'></i></a>"; ?>
				</td>
				
	        </tr>
	
	<?php 
	}
	 ?>

						</tbody>
					</table>
				</div>
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

	<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
	<script>
		let table = new DataTable('#myTable');
	</script>
</body>
</html>