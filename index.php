<?php

include 'dao.php';
include 'header.php';

$nomcat = NomCatIndex();
$nomplat = NomPlatIndex();
// var_dump ($nomplat);
// include 'assets/php/Categorie.php';

// $db= ConnectDB();
// var_dump ($db);

// $classe = new Categorie($db);
// $nomcat = $classe->NomCat();
// var_dump ($nomcat);
?>

<!-- CAROUSEL -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active img-carou">
        <img src="assets/img/bg1.jpeg" class="d-block" alt="...">
      </div>
      <div class="carousel-item img-carou">
        <img src="assets/img/bg2.jpg" class="d-block" alt="...">
      </div>
      <div class="carousel-item img-carou">
        <img src="assets/img/bg3.png" class="d-block" alt="...">
      </div>
      <div class="carousel-caption d-flex flex-column justify-content-center h-100 p-0">
          <h1>The District</h1>
          <p class="slogan text-primary">Découvrez de nouvelles saveurs!</p>
        </div>
    </div>
</div>
<!-- CATEGORIES -->
<div class="py-5 plat-bg">
  <h2 class="text-white text-center">Nos différentes catégories</h2>
  <h3 class="text-primary text-center pb-5">Essayez notre nouvelle selection</h3>
  <div class="row justify-content-center w-100 col-9 cate">
    <!-- FOR EACH -->
    <?php foreach ($nomcat as $cat): ?>
      <div class="col-6 col-md-2 p-0 justify-content-center">
          <a class="p-0 text-white" href="">
            <img src="assets/img/category/<?= $cat->image ?>" class="d-block w-100 mx-auto" alt="...">
            <div class="pt-2 text-center text-break">
              <h4 class="text-white"><?= $cat->libelle ?></h4>
            </div>
          </a>
      </div>
    <?php endforeach; ?>
    <!-- END FOR EACH -->
  </div>
</div>
<!-- PLATS -->
<div class="row no-gutters w-100 m-0">
<?php foreach ($nomplat as $plat): ?>
    <div class="col-4 col-md plat p-0">
      <div>
        <img src="assets/img/food/<?= $plat->image ?>" class="w-100" alt="...">
      </div>
        <div class="bg-dark py-3 text-center h-50">
          <p class="text-white m-0 px-3">
            <?= $plat->libelle ?>
          </p>
          <a class="p-0 text-white" href="">
            <br>Commander
          </a>
        </div>
    </div>
<?php endforeach; ?>
</div>

<?php include 'footer.php';?>