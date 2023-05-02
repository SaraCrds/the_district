<?php 

include "header.php";
include "dao.php";

$title =  NomCatTitle();

// var_dump ($title);

?>
<div class="bigtitle d-flex align-items-center justify-content-center">
    <div class="w-100">
    <p class="text-center text-white">Notre Carte</p>
</div>
</div>

<div class="nav-cat">
    <ul class="list-group list-group-horizontal-md mt-5 d-flex justify-content-center text-center">
        <a href="categorie.php"><li class="list-group-item bg-transparent text-white border-0">TOUS</li></a>
        <?php foreach ($title as $title): ?>
        <a href="categorie.php?id=<?= $title->id ?>"><li class="list-group-item bg-transparent text-white border-0"><?= $title->libelle ?></li></a>
        <?php endforeach; ?>
    </ul>
</div>
<div class="d-flex justify-content-center mt-5">
<div class="image col-md-2 col-6">
<img src="assets/img/food/cesar_salad.jpg" alt="background">
<div class="text text-white mt-2 mx-3"><p class="mb-0">This is the text over image</p><p>123456</p></div>
</div>
</div>

<?php 
include "footer.php";
?>