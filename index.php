<!--constance carsCard -->
<?php
  define('_CARS_IMG_PATH','upload/voitureoccation/');
?>

<!--header-->
<?php
include_once('templets/header.php');
include_once('app/tools/carfunc.php');

?>
<!--fin header -->


<!-- debut section1 -->
<section>

  <div class="px-4 py-5 my-5 text-center">
    
    <h1 class="display-5 fw-bold text-body-emphasis">garage vincent parrot</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4 text-capitalize">garage Vincent Parrot  on  vous propose une large gamme de services:
         réparation de la carrosserie et de la mécanique des voitures ainsi que leur entretien régulier pour
          garantir leur performance et vente des véhicules d'occasion.
      </p>
    
  </div>
    
</section>
<!--fin section1-->

<!--debut section2-->
<section>
<div class= 'my-5 mx-4'>
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
        </div>
        <div class="carousel-inner ">
          <div class="carousel-item">
            <img class="bd-placeholder-img rounded" width="100%" height="100%" src="assets/image/entretienCarrosserie.avif" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>entretien Carrosserie</h1>
                <p class="opacity-75">meilleur service pour une remise a neuf de votre voiture</p>
                <p><a class="btn btn-lg btn-primary" href="#">plus d'info</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item active">
            <img class="bd-placeholder-img rounded" width="100%" height="100%" src="assets/image/entretienRegulier.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
            <div class="container">
              <div class="carousel-caption">
                <h1>entretien regulier</h1>
                <p>notre garage vous offre le meilleur entretien pour vos voirure</p>
                <p><a class="btn btn-lg btn-primary" href="#">plus d'info</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="bd-placeholder-img rounded" width="100%" height="100%" src="assets/image/imageMecanique.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>mecanique voirute</h1>
                <p>pieces de qualité et employé qualifier pour la reparation de vos voiture</p>
                <p><a class="btn btn-lg btn-primary" href="#">plus d'info</a></p>
              </div>
            </div>
          </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>

</section>
<!-- fin section2-->

<!--debut section3 carsCard -->
<div class="px-4 py-5 my-5 text-center">
  <h4 class="display-5 fw-bold text-body-emphasis"> on vous propose une large gamme de voiture d'occasion</h4>
</div>


<div class="my-4">

    <?php
    $pdo = new PDO('mysql:dbname=garagevparrot;host=localhost;charset=utf8mb4', 'root', '');
    $cars = getcars($pdo, 3);

    ?>
 <div class="row mx-3" >
    <?php foreach ($cars as $kays=>$car){ 

      include('templets/carsCard.php');

        } ?>
  </div>
  <div class=" col-4 col-sm-4 col-md-6 m-auto text-center ">

      <a href="cars.php" class="btn btn-primary text-center  mt-5">voir plus de voiture</a>

  </div>

</div>

<!--fin section3 carsCard -->

<!-- section4 avis client-->

<section>
<div class="container mb-5 pt-5">
        <div class="row">
          <div class="col-12 col-sm-7 col-md-12 m-auto">
            <div class="card border-0 shadow">
              <div class="card-body container">
                <div class="mx-4 text-center ">
                  <h3>laissez nous votre avis</h3>
                  <b><h5>votre satisfaction et notres objectif veuiller nous laisser votre avis sur votre experience avec notre garage</h5>
                </div>
                <div >  
                  <div class="text-center my-4 " >
                    <a href="formulaireAvis.php"><button class="btn btn-primary " type="button">poster votre avis</button></a>
                  </div>
                </div>  
              </div>
            </div>
          </div>
        </div>
</div>           

</section>

<!-- fin section4 avis client-->



 




<!--footer -->

<?php
include_once('templets/footer.php');

?>
<!--fin footer-->
