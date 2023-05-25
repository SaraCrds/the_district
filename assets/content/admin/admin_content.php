<?php

$DisCat = AdminCat();

?>

<div class="bg-plat-page">
<div class="col-12 text-white">
<h2 class="text-white text-center">Panneau Administrateur</h2>
<p class="col-md-6 col-11 mx-auto mt-3 text-center">
    <a class="text-white" href="index.php">Cliquez ici pour retourner à l'index</a>
</p>
<div class="row no-gutters col-11 mx-auto shadow-none">
    <?php foreach ($DisCat as $DisCat): ?>
    <div class="col-md-4 col-12 bg-black p-2">
        <div class="row no-gutters">
            <div class="col-md-6 platspe col-12">
            <img src="assets/img/category/<?= $DisCat->image ?>" class="w-100">
            </div>
            <div class="col-md-6 col-12">
            <p class="platspe_lib text-white mb-3"><?= $DisCat->libelle ?></p>
            <p class="platdesc text-white mb-4">Active? <?= $DisCat->active ?></p>
            <a class="text-white" href="cat_modify.php?id=<?= $DisCat->id ?>"><span class="material-symbols-outlined">settings</span></a>
            <a class="text-white" href="assets/content/script/script_delete_category.php?id=<?= $DisCat->id ?>" onclick="return confirm('Voulez-vous supprimer cette categorie? /n Ce n`est pas réversible')"><span class="material-symbols-outlined">delete</span></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
</div>
</div>