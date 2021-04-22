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

    public function getArticles() {
        $articles = self::findOne();
        if($articles) {
            foreach($articles as $values) {
                array_push($this->articlesData, $values['article']);
            }
        }
    }

    public static function findOne($where = []) {
        $tableName = self::tableName();
        $statement = self::prepare("SELECT article FROM articles");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function save() {
        
    }

}

?>