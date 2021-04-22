<?php

namespace core\db;
use core\Model;
use core\Application;

abstract class DbModel extends Model {

    abstract static public function tableName() : string;

    abstract public function attributes() : array;

    abstract public static function primaryKey(): string;

    abstract static public function findOne($where);

    public function save(){
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($attr) => ":$attr", $attributes);
        $statement = self::prepare("INSERT INTO $tableName (".implode(',', $attributes).")
                                    VALUES(".implode(',', $params).")");

        foreach($attributes as $attribute) {
            $statement->bindValue(":$attribute", $this->{$attribute});
        }

        $statement->execute();
        return true;
    }

    public static function prepare($sql) {
        return Application::$app->db->pdo->prepare($sql);
    }
}

?>