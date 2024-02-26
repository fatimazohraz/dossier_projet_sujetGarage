<!--header-->

<?php
include_once('templets/header.php');
?>

<!--fin header -->

<section>
      <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-12 col-sm-7 col-md-6 m-auto">
            <div class="card border-0 shadow">
              <div class="card-body">
                <h4 class="mx-auto my-3"  width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">entrez vos coordonnées</h4>
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                <form action=""  method="$_POST">
                  <input type="mail" name="mail" id="mail" class="form-control my-4 py-2" placeholder="adresse e-mail" autocomplete="off"/>
                  <input type="text" name="" id="" class="form-control my-4 py-2" placeholder="mot de passe" autocomplete="off" />
                  <div class="text-center mt-3">
                    <button class="btn btn-primary">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


  

  






<!--footer -->

<?php
include_once('templets/footer.php');

?>
<!--fin footer-->
