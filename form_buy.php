<?php 
require_once('include/header.php');
require_once('include/bootstrap.php');

$res = new Products($db_connection);
$buys = new Buys($db_connection);

$result = $res -> get($_GET['id']);




?>
	<section>
		<article>
			<div class="sadarjanie">
				<div class="buy">
					<h2>Купуване на:</h2>
					
					<fieldset class="ramki">
				
						<?php foreach($result as $key => $value){ ?>

						<img id="pict" src="../admin/pict/<?php echo $value['images']?>"/>
						
					</fieldset>
					<p class="cat">
						<?php echo $value['name'];?>,
						<?php echo $value['colors'];?><br>
						<?php echo $value['price'];?>лв.
					</p>
					
					<?php 
						if($_SERVER['REQUEST_METHOD'] == 'POST'){
							$name = $_POST['name'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
												
							if(validate_field($name) && $name != ''){
								if(validate_email($email) && $email != ''){
									if(validate_phone($phone) && $phone != ''){

										$buy = new Buy();
										$buy -> name = $_POST['name'];
										$buy -> date_add = date('Y-m-d H:i:s');
										$buy -> email = $_POST['email'];
										$buy -> phone = $_POST['phone'];
										$buy -> product_title = $value['name'];
										$buy -> product_price = $value['price'];
										$buy -> is_approved = '';
										$buys -> add($buy);
										
										redirect('buy.php?id='.$_GET['id']);
									}else{
										echo  "<div class='error'>Въведете телефон!</div>";
									}
								}else{
									echo  "<div class='error'>Въведете email!</div>";
								}
							}else{
								echo  "<div class='error'>Въведете име!</div>";
							}
						}
					?>
					<?php } ?>
				</div>


				<div>
					<form method="post" action="">
						<label>Име:
						<input type="text" name="name" id="" value="">
						</label><br>
						
						<label>Email:
						<input type="text" name="email" id="" value="">
						</label><br>
						
						<label>Телефон:
						<input type="text" name="phone" id="" value="">0xxx/xxx-xxx
						</label><br>
						
						<button type="submit" class="catal">поръчай</button>
					</form>
					
					
				</div>

			
			</div>	
		</article>
	</section>
</body>
</html>