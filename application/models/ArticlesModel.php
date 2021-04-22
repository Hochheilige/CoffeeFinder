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
                array_push($tempArtData, $values['article']);
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
        $statement = self::prepare("SELECT article FROM $tableName");
        
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function save() {
        
    }

}

?>