<!--constance carsCard -->
<?php
  define('_CARS_IMG_PATH','upload/voitureoccation/');
?>

<?php 
include_once('templets/header.php');
include_once('app/tools/carfunc.php');




    $pdo = new PDO('mysql:dbname=garagevparrot;host=localhost;charset=utf8mb4', 'root', '');
    $cars = getcars($pdo);



?>
<h1 class="my-5 ml-3 text-center">nos voiture</h1>

 <div class="row mx-3" >
    <?php foreach ($cars as $kays=>$car){ 

      include('templets/carsCard.php');

        } ?>
  </div>
  














<?php
include_once('templets/footer.php');

?>