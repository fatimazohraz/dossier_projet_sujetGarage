<?php
  define('_CARS_IMG_PATH','upload/voitureoccation/');
?>

<!--header-->
<?php

include_once('templets/header.php');
include_once('app/tools/user.php');

?>

<?php

  $message=[];
  $errors=[];

 if (isset($_POST['addUser'])) {

    $newuser = addUser($pdo, $_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password']);

    if ($newuser) {
        $messages[] = 'Merci pour votre inscription';
    } else {
        $errors[] = 'Une erreur s\'est produite lors de votre inscription';
    }

  }

?>


?>
<!--debut formulaire de connection-->
<section>
      <div class="container my-5 pt-5">
        <div class="row">
          <div class="col-12 col-sm-7 col-md-6 m-auto">
            <div class="card border-0 shadow">
              <div class="card-body">
                <form action=""  method="$_POST" enctype="multipart/form-data">

                <div class="mb-2">
                        <label for="last_name" class="form-label">nom</label>
                        <input type="last_name" name="last_name" id="last_name" class="form-control my-4 py-2" placeholder="adresse e-mail" autocomplete="off"/>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="mail" name="mail" id="mail" class="form-control my-4 py-2" placeholder="adresse e-mail" autocomplete="off"/>
                    </div>
                  
                    <div>
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="text" name="" id="" class="form-control my-4 py-2" placeholder="mot de passe" autocomplete="off" />
                    </div>
                        
                   <div class="text-center mt-3">
                      <input type="submit" value="inscription" name="adduser" class="btn btn-primary">
                   </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--fin formulaire de connéction---------->

    <!--footer -->

<?php
include_once('templets/footer.php');

?>
<!--fin footer-->


