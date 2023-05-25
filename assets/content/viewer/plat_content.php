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
            <div class="text-center">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#infocommande">
  Commander
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="infocommande" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Commander un(e) <?= $DisPlat->plat_libelle ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- FORM FOR ORDER -->
    <form action ="assets/content/script/script_order.php" method="post">
        <div class="row shadow-none">
            <div class="col-9">
                <label for="plat">Nom du plat</label>
                <input type="text" class="form-control" id="plat" name="plat" placeholder="<?= $DisPlat->plat_libelle ?>" disabled>
            </div>
            <div class="col-3">
                <label for="qte">Quantité</label>
                <select id="qte" name="qte" class="form-select">
                <?php $i= 1;
                while ($i <=10) {
                    if ($i==1) {
                        $s = "selected";
                    }
                    else {
                        $s = "";
                    }
                    echo "<option value='". $i ."' ". $s .">". $i ."</option>";
                    $i++;
                };?>
                </select>
            </div>
        </div>
        <div class="row shadow-none mt-3">
            <div class="col">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom">
            </div>
            <div class="col">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
        </div>
        <div class="row shadow-none mt-3">
            <div class="col">
                <label for="mail">Adresse e-mail</label>
                <input type="text" class="form-control" id="mail" name="mail">
            </div>
            <div class="col">
                <label for="tel">N° Téléphone</label>
                <input type="text" class="form-control" id="tel" name="tel">
            </div>
        </div>
        <div class="form-group my-3">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse">
        </div>
        <input type="text" class="form-control" id="idplat" name="idplat" value="<?= $id ?>" hidden>
        <input type="text" class="form-control" id="price" name="price" value="<?= $DisPlat->prix ?>" hidden>
        <div class="modal-footer">
        <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Confirmer</button>
      </div>
    </form>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
</div>