<?php 
require_once('include/header.php');
require_once('include/bootstrap.php');

$news = new News($db_connection);
$result = $news -> getAll();


?>
	<section>
		<article>
			<div class="sadarjanie">
				<fieldset class="blog">
				
				<?php foreach($result as $key => $value){ ?>
				
					<a class="color" href="news.php?id=<?php echo $value['id'];?>">
						<h3><?php echo $value['title'];?></h3>
					</a>
					
					<p>
						<?php echo $value['content'];?>
					</p>
					
				<?php } ?>
				</fieldset>

				<br>
				<p class="newlist">
					<a href="" id="newlist">1</a><a href="" id="newlist">&nbsp;2&nbsp;</a>
					<a href="" id="newlist">3</a><a href="">&nbsp;4&nbsp;</a><a href="">&raquo;</a>
				</p>
			</div>
			
		</article>
	</section>
</body>
</html>