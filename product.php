<?php 
require_once('include/header.php');
require_once('include/bootstrap.php');

$res = new Products($db_connection);
//$result = $res -> getAll();
$result = $res -> get($_GET['id']);
$one_images = $res->one_images($_GET['id']);


if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	redirect('form_buy.php?id='.$_GET['id']);
}

?>
	<section>
		<article>
			<div class="sadarjanie">
			
				<fieldset class="ramki">
					<?php if($one_images != ''){ ?>
					<?php foreach($one_images as $key => $value){ ?>

						<img id="pict" src="../admin/pict/<?php echo $value['images']?>"/>
						
				</fieldset>
				

					<ul class="cat">
						<li><?php echo $value['name'];?></li>
						<li><?php echo $value['colors'];?></li>
						<li><?php echo $value['price'];?>лв.</li>
					</ul>
					
					<?php } ?>
					<?php } ?>

					<form method="post" action="" class="news">
						<button type="submit" class="catal">купи</button>
					</form>

			
				
				

			
				
			
				
				<div class="posledni">
					<?php if($result != ''){ ?>
					<?php foreach($result as $key => $value){ ?>
							
							<fieldset class="catalog">	
								<a href="product.php?id=<?php echo $value['products_id'];?>">
								<img id="pic" src="../admin/pict/<?php echo $value['images']?>"/></a>
								<figcaption>
									<p class="cena">
										<?php echo $value['name'];?>
										<?php echo $value['colors'];?><br>
										<?php echo $value['price'];?>
									</p>
								</figcaption>
							</fieldset>
					<?php } ?>
					<?php } ?>
				</div>
		</div>
				
				
		</article>
	</section>
</body>
</html>