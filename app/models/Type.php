<?php

use app\utils\Database;
use PDO;

class Type extends CoreModel {
    private $name;

    public function findAll() {
        $sql = "SELECT * FROM type";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $types = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Brand::class);

        return $types;
    }

    public function find($id) {
        $sql = "SELECT * FROM type WHERE id = ".$id;

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $type = $pdoStatement->fetchObject(Brand::class);

        return $type;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

?>
