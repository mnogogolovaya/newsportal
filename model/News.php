<?php
class News {
	public static function getLast10News() {
		$query = "SELECT * FROM news ORDER BY id DESC LIMIT 3";
		$db = new Database();
		$arr = $db->getAll($query);
		return $arr;
	}
	public static function getAllNews() {
		$guery = "SELECT * FROM news ORDER BY id DESC";
		$db = new Database();
		$arr = $dn->getAll($query);
		return $arr;
	}

	public static function getNewsByCategoryID($id) {
		$query = "SELECT * FROM news where category_id=".(string)$id." ORDER BY id DESC";
		$db = new Database();
		$arr = $db->getAll($query);
		return $arr;
	}


	public static function getNewsByID($id) {
		$guery = "SELECT * FROM news where id=".(string)$id;
		$db = new Database();
		$n = $db->getOne($query);
		return $n;
	}
}
?>