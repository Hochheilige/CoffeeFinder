<?php

namespace core\db;

class Database {

    public const dsn = 'mysql:host=localhost;port=0;dbname=coffeefinder'; 
    public const user = 'root';
    public const password = '';

    public \PDO $pdo;
    
    public function __construct() {
        $this->pdo = new \PDO(self::dsn, self::user, self::password);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function prepare($sql) {
        return $this->pdo->prepare($sql);
    }

}

?>