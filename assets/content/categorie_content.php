<?php 
$title =  NomCatTitle();
$id = CatGetId();

if (is_null($id)) {
    $catAll = CatDisplayAll();
    $catPlat = $catAll;
}
else {
    $catSpe = CatDisplaySpe($id);
    $catPlat = $catSpe;
}

?>

<div class="bigtitle d-flex align-items-center justify-content-center">
    <div class="w-100">
    <p class="text-center text-white">Notre Carte</p>
</div>
</div>

<div class="nav-cat ">
    <ul class="list-group list-group-horizontal-md d-flex justify-content-center text-center">
        <a href="categorie.php"><li class="list-group-item bg-transparent text-white border-0">TOUS</li></a>
        <?php foreach ($title as $title): ?>
        <a href="categorie.php?id=<?= $title->id ?>"><li class="list-group-item bg-transparent text-white border-0"><?= $title->libelle ?></li></a>
        <?php endforeach; ?>
    </ul>
</div>
<div class="bg-cat-page d-flex justify-content-center">
<div class="row col-md-8 col-12 pt-5 pb-3 d-flex justify-content-center">
<?php foreach ($catPlat as $catPlat ): ?>
    <div class="image col-md-3 col-10 p-0 mx-2 mb-4">
        <a href="plat.php?id=<?= $catPlat->id ?>">
            <img src="assets/img/food/<?= $catPlat->image ?>" alt="background">
            <div class="text text-white pt-2 px-3">
                <p class="catplat_title mb-0"><?= $catPlat->libelle ?></p>
                <p class="mb-0"><?= $catPlat->plat_libelle ?></p>
            </div>
        </a>
    </div>
<?php endforeach; ?>
</div>
</div>