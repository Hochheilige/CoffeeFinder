<?php

namespace models;
use core\db\DbModel;

class ArticlesModel extends DbModel {

    public array $articlesData = [];

    public function rules(): array {
        return [];
    }

    public static  function tableName() : string {
        return 'articles';
    }

    public function attributes() : array {
        return ['article'];
    }

    public static function primaryKey(): string {
        return 'article_id';
    }

    public function getArticles($count = 0) {
        $articles = self::findOne();
        $tempArtData = [];

        if($articles) {
            foreach($articles as $values) {
                array_push($tempArtData, $values);
            }
        }

        if ($count != 0) {
            $keys = array_rand($tempArtData, $count);
            foreach ($keys as $key) {
                array_push($this->articlesData, $tempArtData[$key]);
            }
        } else {
            $this->articlesData = $tempArtData;
        }
    }

    public static function findOne($where = []) {
        $tableName = self::tableName();
        $sql = "
            SELECT article as article, c.name as category, u.username as user FROM $tableName a
            JOIN articles_has_category ahc on ahc.articles_id = a.article_id
            JOIN category c on c.category_id = ahc.category_id
            JOIN users u on u.user_id = a.user_id
        ";

        $statement = self::prepare($sql);
        
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function save() {
        
    }

}

?>