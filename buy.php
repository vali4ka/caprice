<?php 
require_once('include/header.php');
require_once('include/bootstrap.php');

$res = new Products($db_connection);
$buys = new Buys($db_connection);

$result = $res -> get($_GET['id']);
//$data = $buys->get($_GET['id']);



?>
	<section>
		<article>
			<div class="sadarjanie">
				<div class="buy">
					<h2>Благодаря, вие поръчахте:</h2>

				
						<?php foreach($result as $key => $value){ ?>

					<p>
						<?php echo $value['name'];?>,
						<?php echo $value['colors'];?><br>
					</p>
				
					
					<p>За потвърждение изпратете:
						<?php echo $value['price'];?>лв. на IBAN:BIC4565387GH95
					</p>
					<?php } ?>

					
					<p>
						
						с референтен номер 	<?php echo $value['id'];?>
					</p>
										
				</div>
				

			
			</div>	
		</article>
	</section>
</body>
</html>