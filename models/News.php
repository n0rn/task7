<?php


class News
{



	public static function getNewsItemByID($id)
	{
		$id = intval($id);

		if ($id) {
			$db = Db::getConnection();
			$result = $db->query('SELECT * FROM news WHERE id=' . $id);

			/*$result->setFetchMode(PDO::FETCH_NUM);*/
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$newsItem = $result->fetch();

			return $newsItem;
		}

	}

	/**
	* Returns an array of news items
	*/
	public static function getNewsList() {

		$db = Db::getConnection();
		$newsList = array();

		$result = $db->query('SELECT id, title, post FROM news ORDER BY id ASC LIMIT 5');

		$i = 0;
		while($row = $result->fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['post'] = $row['post'];
			$i++;
		}

		return $newsList;
	
	}

	public static function deleteNews($id){
		$db = Db::getConnection;

		$sql = "DELETE FROM news WHERE id= :id ";

		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);

		return $result->execute();
	}

	public static function updateNews($id, $title, $post){

		$db = Db ::getConnection();

		$sql = "UPDATE news  
		SET
		title = :title,
		post = :post
		WHERE id = :id";

		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->bindParam(':title', $title, PDO::PARAM_STR);
		$result->bindParam(':post', $post, PDO::PARAM_STR);
		return $result->execute();


	}

	public static function createPost($options){
		$db = Db::getConnection();

		$sql = "INSERT INTO news"
			. "(id, title, post)"
			. "VALUES"
			. "(:id, :title, :post)";

		$result = $db->perpare($sql);
		$result->bindParam(':id', $options['id'],PDO::PARAM_INT );
		$result->bindParam(':title', $options['title'],PDO::PARAM_STR );
		$result->bindParam(':post', $options['post'],PDO::PARAM_STR );
		if($result->excute()){
			return $db->lastInsertId();
		}
		return 0;
	}

}