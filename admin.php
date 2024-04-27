
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

<?php
//initialisation des variables
$errors = [];
$messages = [];

$car = [
  'title' => '',
  'description' => '',
  'price' => '',
  'kilometers' => '',
  'year' => '',
  'category_id' => '',

];
//----------------------------------

//fonction d'importation des categorie de voiture
$categories = getcategories($pdo); 



//on teste si le formulaire a été envoyé avvec la methode isset

if (isset($_POST['savecar'])) { 
  $fileName = null;

  if(isset($_FILES['file']['tmp_name']) && $_FILES['file']['tmp_name'] != '') {  // isset() détermine si une variable existe(verifie si le fichier existe)
    // la méthode getimagessize va retourner false si le fichier n'est pas une image
    $checkImage = getimagesize($_FILES['file']['tmp_name']);  //getimagesize() détermine la taille de toute image supportée 
    if ($checkImage !== false) {
        // Si c'est une image on traite
        $fileName = uniqid().'-'.slugify($_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'], _CARS_IMG_PATH.$fileName);
    } else {
        // Sinon on affiche un message d'erreur
        $errors[] = 'Le fichier n\'est pas une image';
    }
  }

  if (!$errors) { //pour ne pas sauvgardé en cas d'érreur
    $Ncars = saveCar($pdo, $_POST['category'], $_POST['title'], $_POST['description'], $_POST['price'], $_POST['kilometers'], $_POST['year'], $fileName);
    
    if ($Ncars) {
        $messages[] = 'La voiture a bien été ajouté';
    } else {
        $errors[] = 'La voiture n\'a pas été ajouté';
    }
}

$car = [
  
  'title' =>  $_POST['title'],
  'description' =>  $_POST['description'],
  'price' => $_POST['price'],
  'kilometers' => $_POST['kilometers'],
  'year' => $_POST['year'],
  'category_id' => $_POST['category'],

];

}

?>
<!-- fin di teste--------------------->

<h1>ajouter une voiture</h1>

<?php foreach ($messages as $message) { ?> <!--message et errors sont des tableau pour gererer les message d'ereure-->
    <div class="alert alert-success">
        <?=$message; ?>
    </div>
<?php } ?>

<?php foreach ($errors as $error) { ?> <!--message et errors sont des tableau pour gererer les message d'ereure-->
    <div class="alert alert-danger">
        <?=$error; ?>
    </div>
<?php } ?>


<!--debut du formulaire d'ajoue-->

<form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="title" class="form-label">Titre</label>
        <input type="text" name="title" id="title" class="form-control" value="<?=$car['title'] ;?>">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="30" rows="5" class="form-control"><?=$car['description'] ;?></textarea>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">prix</label>
        <input type="text" name="price" id="price" cols="30" rows="5" class="form-control"><?=$car['price'] ;?>
    </div>
    <div class="mb-3">
        <label for="year" class="form-label">année</label>
        <input type="text" name="year" id="year" cols="30" rows="5" class="form-control"><?=$car['year'] ;?>
    </div>
    <div class="mb-3">
        <label for="kilometers" class="form-label">kilométrage</label>
        <input type="text" name="kilometers" id="kilometers" cols="30" rows="5" class="form-control"><?=$car['kilometers'] ;?>
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Catégorie</label>
        <select name="category" id="category" class="form-select">

            <?php foreach ($categories as $category) { ?>
                <option value="<?=$category['id']; ?>" <?php if ($car['category_id'] == $category['id']) { echo 'selected="selected"'; } ?>><?=$category['name'];?></option>
            <?php } ?>

        </select>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Image</label>
        <input type="file" name="file" id="file">
    </div>
    <input type="submit" value="Enregistrer" name="savecar" class="btn btn-primary">


    <!--fin du formulaire d'ajoue pour l'admin-->


</form>

</main>

<?php
include_once('templets/footer.php');

?>

<!--footer -->


