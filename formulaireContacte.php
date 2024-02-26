<!--constance carsCard -->
<?php
  define('_CARS_IMG_PATH','upload/voitureNeuf/');
?>

<!--header-->

<?php
include_once('templets/header.php');
?>


<section>
      <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-12 col-sm-7 col-md-6 m-auto">
            <div class="card border-0 shadow">
              <div class="card-body">
                <h4 class="mx-auto my-3"  width="50" height="50" fill="currentColor" 
                class="bi bi-person-circle" viewBox="0 0 16 16">vos coordonnées</h4>
                    <form action="fichier.php" method="post">
                        <div class="mb-3 ">
                            <label for="nom" class="form-label">nom</label>
                            <input type="text"  name="nom" id="nom" class="form-control">
                        </div>  

                        <div class=" mb-3 ">
                            <label for="prenom" class="form-label" >prénom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control">
                        </div>

                        <div class="mb-3 ">
                            <label for="mail"  class="form-label">e-mail</label> 
                            <input type="email" name="mail" id="mail" class="form-control">
                        </div>
                        
                        <div class="mb-5 ">
                            <label for="tel" class="form-label">tel</label> 
                            <input type="tel" name="tel" id="tel"class="form-control" >
                        </div>

                        <div class="mb-3 ">
                            <textarea name="message" id="message" cols="20" rows="5" class="form-control">votre message</textarea>

                        </div>
                        
                        <div class="text-center mt-3">
                            <input type="submit" value="envoyer" class="btn btn-primary" >
                        </div>
                        
                    </form>
                   
                   </div>
                </div>      
              </div>
          </div>
        </div>
 
</section>        



<!-- footer -->

<?php
include_once('templets/footer.php');

?>
<!--fin footer-->

</html


