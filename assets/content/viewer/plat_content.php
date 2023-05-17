<?php 
$id = PlatGetId();
$DisPlat = PlatDisplay($id);

?>

<div class="bg-plat-page">
    <div class="col-md-8 col-12 mx-auto">
    <a href="javascript:history.back()" class="text-white mb-2"> <i class="fa-solid fa-arrow-left pe-2"></i> Go Back</a>
    </div>
    <div class="row no-gutters col-md-8 col-12 mx-auto">
        <div class="col-md-6 platspe p-0">
            <img src="assets/img/food/<?= $DisPlat->image ?>" class="w-100">
        </div>
        <div class="col-md-6 platspe p-0 bg-black py-3 px-4">
            <p class="chemin text-primary mb-1">
                <a href="categorie.php" class="text-white" >Menu </a> >
                <a href="categorie.php?id=<?= $DisPlat->id_cat ?>" class="text-white" ><?= $DisPlat->categorie_libelle ?></a> > 
                <a href="plat.php?id=<?= $id ?>" class="text-white" ><?= $DisPlat->plat_libelle ?></a>
            </p>
            <p class="platspe_lib text-white mb-3"><?= $DisPlat->plat_libelle ?></p>
            <p class="platdesc text-white mb-4"><?= $DisPlat->description ?></p>
            <p class="prix text-white"><?= $DisPlat->prix ?>€</p>
        </div>
    </div>
</div>