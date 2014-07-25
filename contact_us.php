<?php 
require_once('include/header.php');
require_once('include/bootstrap.php');

$contact = new Contact_us($db_connection);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	$cont = new contact_uss();
	$cont -> name = $_POST['name'];
	$cont -> e_mail = $_POST['e_mail'];
	$cont -> phone = $_POST['phone'];
	$cont -> message = $_POST['message'];
	$contact -> add($cont);
}


?>
	<section>
		<article>
			<div class="sadarjanie">
				<h2>КОНТАКТИ</h2>
				<p class="aboutus">
					Ние се стремим да надминем очакванията на клиентите си и затова хиляди българи 
					избират АДРЕС всяка година, за да купят, продадат, наемат или отдават под наем 
					недвижим имот. От деня на създаването си АДРЕС е символ на сигурност, качествено 
					обслужване и висок стандарт. Чрез енергия и отдаденост постигаме резултатите, които 
					клиентите на АДРЕС очакват. 
				
				<h4 class="aboutus">
					Контактна форма:
				</h4>
				<form action="" method="post" >
					<label for="name" class="name">Име</label>
					<input type="text" id="name" name="name" value="" >
					<br>
					
					<label for="e_mail" class="mail">E-mail</label>
					<input type="text" id="e_mail" name="e_mail" value="" >
					<br>
					
					<label for="phone" class="phone">Телефон</label>
					<input type="text" id="phone" name="phone" value="" >
					<br><br>
					
					<label for="message">Вашето съобщение</label>
					<br>
					<textarea id="message" name="message"  class="message" value="" ></textarea>
					<br>
					<button type="submit">Изпрати</button>
				</form>
				<figure>
					<img src="pict/karta.png"   id="carta"/>
				</figure>
			</div>
		</article>
	</section>
</body>
</html>