<?php

//fonction pour recuperer les categorie des voiture (pour la page admincars.php)
function getcategories(PDO $pdo) {
    $sql = 'SELECT * FROM categories';
    $query = $pdo->prepare($sql);

    $query->execute();
    return $query->fetchAll();
      
}