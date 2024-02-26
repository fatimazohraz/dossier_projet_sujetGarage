<!--constance carsCard -->
<?php
  define('_CARS_IMG_PATH','upload/voitureOccation/');
?>
<?php 
include_once('templets/header.php');
include_once('app/tools/carfunc.php');
?>
  <main>
  <?php
    $pdo = new PDO('mysql:dbname=garagevparrot;host=localhost;charset=utf8mb4', 'root', '');
     $id=(int)$_GET['id'];
     $car = getcarById($pdo, $id);

if ($car) {
  ?>
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?=_CARS_IMG_PATH.$car['image']?>" class="d-block mx-lg-auto img-fluid  rounded "  alt="<?=$car['title']?>" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3"> <?=$car['title']?> </h1>
        <p class="lead"> <?=$car['description']?></p>
        <ul class="container">
            <div ><li> <?=$car['price']?> </li></div>
            <div ><li> <?=$car['year']?> </li></div>
            <div ><li> <?=$car['kilometers']?> </li></div>
        </ul>
      </div>
    </div>
  </div>

  <?php } else { ?>
    <div class="row text-center">
        <h1>Recette introuvable</h1>
    </div>
<?php } ?>


</main>

<?php
include_once('templets/footer.php');

?>