<?php 
require_once('item.php');
class DBConnection {
	private $conn;//链接对象
	public function getConnInstance() {
		if (!$this->conn){
			$this->conn = new PDO('mysql:host=localhost; dbname=shop; charset=utf8mb4', 'root', 'root');
		}
		return $this->conn;
	}
	public function getAllItemsReturnArr(){
		$this->getConnInstance();
		$stmt = $this->conn->query("SELECT * FROM Item");
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	public function getAllItemsReturnObj(){
		$this->getConnInstance();
		$stmt = $this->conn->query("SELECT * FROM Item");
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$items = array();
		foreach($result as $row){
			$item = new Item();//类是，类是对象模版，
			$items[] = $item->arrayAdapter($row);
		}
		return $items;
	}
}


 ?>