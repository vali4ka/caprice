<?php 
require_once('include/header.php');
require_once('include/bootstrap.php');

$res = new Products($db_connection);
$search = new Contact_us($db_connection);

$result = $res -> getAll();


$success = false;
$errors = false;

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['search'] !== '') {
    $name=$_POST['search'];
	$data = $search->get($name);
	
	$success = true;

} else {
    $errors = true;
}

?>
	<section>
		<article>
			<div class="sadarjanie">
			
					
				<?php if($success == true): ?>
					<?php foreach($data as $key => $value){ ?>
				
						<div class="prod">
							<fieldset class="ramki">
								
									<a href="product.php?id=<?php echo $value['id'];?>"><img id="img" src="../admin/pict/<?php echo $value['images']?>"/></a>
									<figcaption>
										<p class="cena">
											<?php echo $value['name'];?>
											<?php echo $value['colors'];?><br>
											<?php echo $value['price'];?>
										</p>
									</figcaption>
							
							</fieldset>
							
						</div>
					<?php exit ?>
			<?php } ?>
			<?php endif; ?>
			

				<?php if($errors == true): ?>
					<div>There is no such product in our catalogue. Please, try with a different product name!</div>
					
				<?php endif; ?>
			
				<fieldset class="search">
					<form action="" method="post" class="news">
						<input type="text" id="search" name="search" value="search" >
						<button type="submit" class="catal">search</button>
						<select>
							<option checked="checked">order by</option>
							<option>цена</option>
							<option>сандали</option>
							<option>обувки</option>
						</select>
					</form>
				</fieldset>
				
			

				<?php foreach($result as $key => $value){ ?>
				
				
						<div class="prod">
							<fieldset class="ramki">
								
									<a href="product.php?id=<?php echo $value['id'];?>"><img id="img" src="../admin/pict/<?php echo $value['images']?>"/></a>
									<figcaption>
										<p class="cena">
											<?php echo $value['name'];?>
											<?php echo $value['colors'];?><br>
											<?php echo $value['price'];?>
										</p>
									</figcaption>
							
							</fieldset>
							
						</div>
			<?php } ?>
			
				
				<p class="newlist">
					<a href="" id="newlist">&nbsp;1&nbsp;</a><a href="" id="newlist">&nbsp;2&nbsp;</a>
					<a href="" id="newlist">&nbsp;3&nbsp;</a><a href="">&nbsp;4&nbsp;</a><a href="">&raquo;</a>
				</p>
			</div>
		</article>
	</section>
</body>
</html>