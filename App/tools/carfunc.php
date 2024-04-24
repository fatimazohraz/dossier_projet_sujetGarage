<?php
//fonction php pour recuperer elements bdd pour car.php

function getcarById(PDO $pdo, int $id) {
    $query = $pdo->prepare("SELECT * FROM voiture WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}

//fonction php pour recuperer elements bdd pour cars.php et index.php
function getcars(PDO $pdo, int $limit = null) {
    $sql = 'SELECT * FROM voiture ORDER BY id DESC';

    if ($limit) {
        $sql .= ' LIMIT :limit';
    }

    $query = $pdo->prepare($sql);

    if ($limit) {
        $query->bindParam(':limit', $limit, PDO::PARAM_INT);
    }

    $query->execute();
    return $query->fetchAll();
}

// fonction pour ajouter une nouvelle voiture par l'administrateur

function saveCar(PDO $pdo, int $category, string $title, string $description, string $price, string $kilometers, string $year, string|null $image) {
    $sql = "INSERT INTO `voiture` (`id`, `category_id`, `title`, `description`, `price`, `kilometers`,`year` , `image`) VALUES (NULL, :category_id, :title, :description, :price, :kilometers, :year, :image);";
    $query = $pdo->prepare($sql);
    $query->bindParam(':category_id', $category, PDO::PARAM_INT);
    $query->bindParam(':title', $title, PDO::PARAM_STR);
    $query->bindParam(':description', $description, PDO::PARAM_STR);
    $query->bindParam(':price', $price, PDO::PARAM_STR);
    $query->bindParam(':kilometers', $kilometers, PDO::PARAM_STR);
    $query->bindParam(':year', $year, PDO::PARAM_STR);
    $query->bindParam(':image', $image, PDO::PARAM_STR);
    return $query->execute();
}


















// function pour image par defaut
function getRecipeImage(string|null $image) {
    if ($image === null) {
        return _ASSETS_IMG_PATH_.'recipe_default.jpg';
    } else {
        return _RECIPES_IMG_PATH_.$image;
    }
}


