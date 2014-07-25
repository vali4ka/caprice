<?php 

class Comments implements ICRUD_comments {
	private $db;

	public function __construct($db) {
		$this->db = $db;
	}
	
	
		public function add(IItem $item){
		
		$sql = '
			INSERT INTO comments (news_id, comments, user, date_add)
			VALUES (
				"'.$item->news_id.'",
				"'.$item->comments.'",
				"'.$item->user.'",
				"'.$item->date_add.'"
			)
		';
		mysqli_query($this->db, $sql);
	}
	
	
	function delete($id){
	
		$sql = '
			DELETE FROM comments
			WHERE id = '.$id;
		
		mysqli_query($this->db, $sql);
	}

			public function get_comments($id){
		
		$sql = '
			SELECT comments.comments, comments.id, comments.user, comments.date_add
			FROM news
			LEFT JOIN comments ON news.id = comments.news_id 
			WHERE news.id ='.$id;
			
	return  mysqli_query($this -> db, $sql);
	
	
	}
	
		public function get_news_comments($news_id){
		
		$sql = '
			SELECT comments.news_id, news.id, news.title, news.date_add, news.content, news.image
			FROM news
			LEFT JOIN comments ON news.id = comments.news_id 
			WHERE news.id = '.$news_id;
			
	$res =  mysqli_query($this -> db, $sql);
	return mysqli_fetch_assoc($res);
	
	
	}
/*	
	public function getAll() {

		$sql = 'SELECT * FROM coments2';
		$res = mysqli_query($this->db, $sql);
		$result = array();
		while ( $row = mysqli_fetch_assoc($res) ) {
			$result[] = $row;
		}

		return $result;

	}
*/
}
?>