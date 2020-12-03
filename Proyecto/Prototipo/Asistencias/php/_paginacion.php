
<?php
    include "conexion.php";
    $conexion = conexion();
    $page = isset($_GET['page']) ? $_GET['page'] : 1;	
    $result1 = $conexion->query("SELECT count(P.NumeroPaciente) as id FROM Paciente P WHERE P.Visibilidad = 1");
	$custCount = $result1->fetch_all(MYSQLI_ASSOC);
	$total = $custCount[0]['id'];
	$pages = ceil( $total / 10 );
    $Previous = (($page - 1) <= 1)? $page : $page-1;
    $Next = (($page + 1) > $pages)? $page : $page+1;
    echo "Page: " . $page;
?>

<div class="col-md-10">
    <nav aria-label="Page navigation">
        <ul class="pagination">
        <li>
            <a href="index.php?page=<?= $Previous; ?>" aria-label="Previous">
            <span aria-hidden="true">&laquo; Previous</span>
            </a>
        </li>
        <?php for($i = 1; $i<= $pages; $i++) : ?>
            <li><a href="index.php?page=<?= $i; ?>"><?= $i; ?></a></li>
        <?php endfor; ?>
        <li>
            <a href="index.php?page=<?= $Next; ?>" aria-label="Next">
            <span aria-hidden="true">Next &raquo;</span>
            </a>
        </li>
        </ul>
    </nav>
</div>