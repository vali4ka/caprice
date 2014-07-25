<?php 
require_once('include/header.php');
require_once('include/bootstrap.php');

$res = new Products($db_connection);

$result = $res -> getAll();

?>

	<section>
		<article>
				<div class="sadarjanie">
					<h2>ПРОМИЦИОНАЛНИ ПРЕДЛОЖЕНИЯ:</h2>
					<div>
						<?php foreach($result as $key => $value){ ?>
				
				
							<fieldset class="ramka">
								<figure class="letni">
								
									<a href="product.php?id=<?php echo $value['id'];?>"><img id="pict" src="../admin/pict/<?php echo $value['images']?>"/></a>
									<figcaption>
										<p class="cena">
											<?php echo $value['name'];?>
											<?php echo $value['colors'];?><br>
											<?php echo $value['price'];?>
										</p>
									</figcaption>
								</figure>
							</fieldset>
						<?php } ?>
					</div>


					<p class="novini">
						Последни новини:
					</p>
					<div class="posledni">
						<p>
							Ако искате да върнете продукта, можете да го направите в срок от 7 работни 
							дни от датата на получаването му. Продукта трябва да бъде в оригинална опаковка,
							заедно с придружаващите го документи , без да е монтиран.
							<a href="">Прочетете повече</a>
						</p>
						<p>
							Доставки за град Пловдив. Продуктите се доставят от 30 минути до 3 часа след приемане 
							на заявката. Стойността на доставката за гр. Пловдив е 3.00 лв. , за суми над 80.00 лева 
							доставката е безплатна.
							<a href="">Прочетете повече</a>
						</p>
						<p>
							При направена покупка от онлайн магазина може да получите стоката в офиса на адрес:
							<a href="">Прочетете повече</a>
						</p>
					</div><br>
				</div>
			</article>
		</section>
</body>
<html>