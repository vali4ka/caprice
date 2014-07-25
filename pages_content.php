<?php
require_once('include/bootstrap.php');
require_once('include/header.php');

$res = new Pages($db_connection);
$data = $res -> get($_GET['id']);


?>
	<div>
		<h2><?php echo $data['title'];?></a></h2>
		<br>
		<?php echo $data['content'];?></a>
	</div>

<?php
require_once('include/footer.php');    