<?php

class Products implements ICRUD{
	
	private $db;
	
	public function __construct($db) {
		$this->db = $db;
	}
	
	public function add(IItem $item){
	}
	
	public function update($id, IItem $item){
	}
	
	
	public function delete($id){
	}
	
	public function get($id){
	

		$sql = '
			SELECT colors.products_id,  products.price, products.id,  colors.images, colors.colors, products.name
			FROM products
			INNER JOIN colors ON products.id = colors.products_id 
			WHERE colors.id ='.$id;
			
	return  mysqli_query($this -> db, $sql);
	
	}
/*
	
			$sql = '
			SELECT colors.images, colors.id, products.price, colors.colors, products.name, colors.products_id
			FROM products
			LEFT JOIN colors ON products.id = colors.products_id 
			WHERE colors.id ='.$id;
			
			
		return  mysqli_query($this -> db, $sql);
		
	}
*/
	
	public function getAll(){
		
		$sql = '
			SELECT colors.images, colors.colors, products.name, products.price, colors.id, colors.products_id
			FROM products
			INNER JOIN colors ON products.id = colors.products_id
			';

		return  mysqli_query($this -> db, $sql);
	}
	
	
		public function one_images($id){
	
			$sql = '
			SELECT colors.images, products.price, colors.colors, products.name, colors.id
			FROM products
			INNER JOIN colors ON products.id = colors.products_id 
			WHERE colors.id ='.$id;
			//LIMIT 1';
			
	return  mysqli_query($this -> db, $sql);
	}
} 

?>