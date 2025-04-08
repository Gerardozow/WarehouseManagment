<?php
$title_page = 'WorkOrders';
//Menus Sidebar
$page = 'Workorder';
$separador = 'Workorders';
require_once('includes/load.php');
if (!$session->isUserLoggedIn(true)) {
	redirect('index.php', false);
}

include_once('layouts/head.php');

?>


<body>
	<div class="wrapper">
		<?php include_once('layouts/sidebar.php'); ?>
		<div class="main">
			<?php include_once('layouts/navbar.php'); ?>
			<!-- Contenedor main -->
			<main class="content">
				<div class="container-fluid p-0">
					<?php echo display_msg($msg); ?>
					<h1 class="h3 mb-3">Blank Page</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Empty card</h5>
								</div>
								<div class="card-body">
								</div>
							</div>
						</div>
					</div>



				</div>
			</main>

			<!-- Fin Contenedor main -->
			<?php include_once('layouts/footer.php'); ?>
		</div>
	</div>

	<?php include_once('layouts/scripts.php'); ?>

</body>

</html>