<!--constance carsCard -->
<?php
  define('_CARS_IMG_PATH','upload/voitureoccation/');
?>

<!--header-->
<?php
include_once('templets/header.php');
?>

<?php
$errors = [];
$messages = [];





  if (isset($_POST['loginUser'])) {

    $user = verifyUserLoginPassword($pdo, $_POST['email'], $_POST['password']);

    if ($user) {
        $_SESSION['user'] = ['email' => $user['email']];
        header('location: index.php');
    } else {
        $errors[] = 'Email ou mot de passe incorrect';
    }

  }

?>





<?php foreach ($messages as $message) { ?>
    <div class="alert alert-success">
        <?=$message; ?>
    </div>
<?php } ?>

<?php foreach ($errors as $error) { ?>
    <div class="alert alert-danger">
        <?=$error; ?>
    </div>
<?php } ?>

<!---------------------------------------------------------->

<h2 class="text-center mt-5 mb-2 mx-5 bg-info py-2 bg-gradient">connection</h2>
<!--debut formulaire de connection-->
<section>
      <div class="container my-5 pt-5">
        <div class="row">
          <div class="col-12 col-sm-7 col-md-6 m-auto">
            <div class="card border-0 shadow">
              <div class="card-body">
                <form action=""  method="$_POST" enctype="multipart/form-data">
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="mail" name="mail" id="mail" class="form-control my-4 py-2" placeholder="adresse e-mail" autocomplete="off"/>
                    </div>
                  
                    <div>
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="text" name="" id="" class="form-control my-4 py-2" placeholder="mot de passe" autocomplete="off" />
                    </div>
                        
                   <div class="text-center mt-3">
                      <input type="submit" value="Connexion" name="loginUser" class="btn btn-primary">
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