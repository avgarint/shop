<?php

use app\utils\Database;
use PDO;

class Category extends CoreModel {
    private $name;
    private $subtitle;
    private $picture;
    private $home_order;

    public function findAll() {
        $sql = "SELECT * FROM category";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $categories = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Brand::class);

        return $categories;
    }

    public function find($id) {
        $sql = "SELECT * FROM category WHERE id = ".$id;

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $category = $pdoStatement->fetchObject(Brand::class);

        return $category;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getSubtitle() {
        return $this->subtitle;
    }

    public function setSubtitle($subtitle) {
        $this->subtitle = $subtitle;
    }

    public function getPicture() {
        return $this->picture;
    }

    public function setPicture($picture) {
        $this->picture = $picture;
    }

    public function getHomeOrder() {
        return $this->home_order;
    }

    public function setHomeOrder($home_order) {
        $this->home_order = $home_order;
    }
}

?>
