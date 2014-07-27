<?php 
require_once('include/header.php');
require_once('include/bootstrap.php');


$comments = new Comments($db_connection);
$result = $comments -> get_news_comments($_GET['id']);
$get_comments = $comments -> get_comments($_GET['id']);


if(isset($_GET['action'])){
	
	if($_GET['action'] == 'delete'){
	
		$blog -> delete($_GET['id']);
		
		redirect('news.php?id='.$_GET['id']);
	}
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	
	if($_POST['comments'] != '' && $_POST['user'] != ''){

		$comment = new Comment();
		$comment -> news_id = $_GET['id'];
		$comment -> comments = $_POST['comments'];
		$comment -> user = $_POST['user'];
		$comment -> date_add = date('Y-m-d');
		$comments -> add($comment);
		
	}else{
		echo "<div class= 'error'>Въведете име и  коментар</div>";
	}
	
	redirect('news.php?id='.$_GET['id']);
	
}

/*
	$people = array();

	if (file_exists('blog.txt')) {
		$people = unserialize(file_get_contents('blog.txt'));	
		
	}
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$people[] = array(
			'name' => $_POST['name'], 
			'coment' => $_POST['coment'],
			
		);
		file_put_contents('blog.txt', serialize($people));

	} else {
		if (isset($_GET['action']) && $_GET['action'] == 'delete') {
			unset($people[$_GET['id']]);
			file_put_contents('blog.txt', serialize($people));			
		}
	}
*/

?>


	<section>
		<article>
			<div class="sadarjanie">
			
				<div class="aboutus">
					<h2><?php echo $result['title'];?></h2>
					
						<?php if($result['image'] != ''){ ?>
						<img id="img" src="../admin/pict/<?php echo $result['image'];?>" >
						<?php } ?>
						<p><?php echo $result['content'];?></p>
				</div>		
				
				
				<?php if($get_comments != ''){ ?>
					<fieldset class="aboutus">
				
					
						<?php foreach($get_comments as  $key => $value){ ?>
					
							<span class="blue"><?php echo $value['user'];?></span>
							<p class="date"><?php echo $value['date_add'];?></p>
							<p><?php echo $value['comments'];?></p>
							<hr>
					
						<?php } ?>
					

					</fieldset >
				<?php } ?>
		
				
				<fieldset class="aboutus">
					<legend>вашият коментар</legend>
					
					<form action="" method="post" class="news" >
						<label for="user" class="name">Име</label>
						<input type="text" id="user" name="user" value=""><br><br> 
						
						<label for="comments">Коментар</label>
						<textarea id="comments" name="comments" value=""></textarea><br><br>
						
						<button type="submit" class="buton">коментирай</button>
					</form>
					
				</fieldset>
			</fieldset>
		</article>
	</section>
</body>
</html>