<?php

//paramétre de connéction a la base de données+
define('DB_SERVER','localhost');
define('DB_USERNAME','nom_utilisateur');
define('DB_PASSWORD','mot_de_passe');
define('DB_NAME','nom_base_de_donnees');

//connéction a la base de données 
$pdo = new PDO('mysql:nom_base_de_donnees;host=DB_SERVER;charset=utf8mb4', 'nom_utilisateur', 'mot_de_passe');

?>