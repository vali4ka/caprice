<?php 
require_once('include/header.php');
require_once('include/bootstrap.php');


$contact = new Contact_us($db_connection);

if($_SERVER['REQUEST_METHOD'] == 'POST'){


	$name = $_POST['name'];
	$email = $_POST['e_mail'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	

		if(validate_field($name) && $name != ''){
			if(validate_email($email) && $email != ''){
				if(validate_phone($phone) && $phone != ''){
					if(validate_field($message) && $message != ''){
					
						$cont = new contact_uss();
						$cont -> name = $_POST['name'];
						$cont -> e_mail = $_POST['e_mail'];
						$cont -> phone = $_POST['phone'];
						$cont -> message = $_POST['message'];
						$contact -> add($cont);
						echo  "<div class='success'>Успешно попълнихте формата!</div>";
					}else{
						echo  "<div class='error'>Въведете съобщение!</div>";
					}
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
					<input type="text" id="phone" name="phone" value="" >(08**/***-***)
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