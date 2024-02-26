<div class="col-md-4 col-sm-12 mb-5">

      <div class="card" >
        <img class="card-img-top" src="<?=_CARS_IMG_PATH.$car['image']?>"  alt="<?=$car['title']?>">
        <div class="card-body">
          <h5 class="card-title text-capitalize font-weight-bolder"><?=$car['title']?></h5>
          <p class="card-text"><?=$car['description']?></p>
          <div class="container">
            <div ><p> <?=$car['price']?> </p></div>
            <div ><p> <?=$car['year']?> </p></div>
            <div ><p> <?=$car['kilometers']?> </p></div>
          </div>
          <a href="car.php?id=<?=$car['id']?>" class="btn btn-primary" > detailles</a>
        </div>
      </div>

</div>




















