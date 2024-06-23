
<?php
  define('_CARS_IMG_PATH','upload/voitureoccation/');
?>

<!--header-->
<?php

include_once('templets/header.php');
require_once('app/tools/categorie.php'); //fonction iportation des catégories
include_once('app/tools/carfunc.php'); // fonction d'importation d'image de la bdd
require_once('app/tools/fonctionOutille.php');

?>
<!--fin header -->
<!-------------------------------------------------------------------------------------->

<main>

<div class="mt=4 mb=4 mx=4">
    <h2 class="text-center bg-info bg-gradient py-2 mx-5 my-5" >bien venue dans votre espace personnelle</h2>


    <div class="d-grid gap-2">
        <button class="btn btn-outline-secondary mx-5" type="button">modification voiture</button>
        <button class="btn btn-outline-secondary mx-5" type="button">modification services</button>
        <button class="btn btn-outline-secondary mx-5" type="button">modification horaires</button>
        <button class="btn btn-outline-secondary mx-5" type="button">ajoue supretion employé</button>
        <button class="btn btn-outline-secondary mx-5 mb-5" type="button">avis clients</button>

    </div>

</div>


</main>


<!--debut footer-->
<?php
include_once('templets/footer.php');

?>

<!--footer -->


