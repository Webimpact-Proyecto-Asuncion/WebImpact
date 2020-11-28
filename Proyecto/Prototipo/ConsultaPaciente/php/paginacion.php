	<?php
	require_once "conexion.php";
	$conexion=conexion();
	$limit = 1;
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$start = ($page - 1) * $limit;
	$result1 = $conexion->query("SELECT count(NumeroPaciente) AS id FROM Paciente WHERE Visibilidad = 1");
	$Count = $result1->fetch_all(MYSQLI_ASSOC);
	$total = $Count[0]['id'];
	$pages = ceil( $total / $limit );

	
	$Previous = $page - 1;
	$Next = $page + 1;

	echo "Limit: " . $limit;
	echo "Start: " . $start;
	echo "Page: " . $page;

	?>
		<div class="row">
		<div class="col-md-10">
			<nav aria-label="Page navigation">
				<ul class="pagination">
				<li class="page-item">
					<a class="page-link" id="Previous" href="index.php?page=<?= $Previous; ?>" aria-label="Previous">
					<span aria-hidden="true">&laquo; Previous</span>
					</a>
				</li>
				<?php for($i = 1; $i<= $pages; $i++) : ?>
					<li class="page-item" ><a method="GET" id="pagina" class="page-link" href="index.php?page=<?=$i; ?>"><?= $i; ?></a></li>
				<?php endfor; ?>
				<li class="page-item">
					<a class="page-link" href="index.php?page=<?= $Next; ?>" aria-label="Next">
					<span aria-hidden="true">Next &raquo;</span>
					</a>
				</li>
				</ul>
			</nav>
		</div>
	</div>