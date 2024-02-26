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

// function pour image par defaut
function getRecipeImage(string|null $image) {
    if ($image === null) {
        return _ASSETS_IMG_PATH_.'recipe_default.jpg';
    } else {
        return _RECIPES_IMG_PATH_.$image;
    }
}


