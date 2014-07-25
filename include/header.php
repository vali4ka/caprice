<?php 
require_once('bootstrap.php');
$pages = new Pages($db_connection);
$data = $pages -> getAll();

?>
<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Caprice</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<header>
		<h1><a href="index.php">CAPRICE <BR>
		<div class="walking">walking on air</div></a></h1>
		<a href="index.php"><img src="pict/logo.jpg" id="logo"></a>
	</header>
	<hr>
	<nav>
		<a href="index.php">Home</a><br>
		<a href="about_us.php">About Us</a><br>
		<a href="catalog.php">Catalog</a><br>
		<a href="blog.php">Blog</a><br>
		<a href="contact_us.php">Contact Us</a><br>
		
		<?php foreach($data as $key => $value){ ?>
			<a href="pages_content.php?id=<?php echo $value['id'];?>"></br>			
			<?php echo $value['title'];?></td></a>
		<?php } ?>
	</nav>
	
</body>
</html>