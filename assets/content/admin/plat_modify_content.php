<?php 
$id = PlatGetId();
$DisPlatSpe = AdminPlatSpe($id);
$active = AdminActive();
$categorie = AdminCatSel();

?>

<div class="bg-plat-page">
    <div class="col-md-11 mx-auto">
    <a href="javascript:history.back()" class="text-white mb-2"> <i class="fa-solid fa-arrow-left pe-2"></i> Go Back</a>
    </div>
    <div class="row no-gutters bg-black col-11 mx-auto mb-5 py-3">
    <div class="col-md-5 bg-black p-2 text-center">
            <img src="assets/img/food/<?= $DisPlatSpe->image ?>" class="w-100 object-fit-contain">
        </div>
        <div class="col-md-7 p-0 bg-black py-3 px-4">
            <form class="px-5 pt-4 h-50 text-white pb-5" action ="assets/content/script/script_modify_plat.php" method="post" enctype="multipart/form-data">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label for="libelle" class="form-label">Libelle:</label>
                        <input type="text" name="libelle" class="form-control" id="libelle" value="<?= $DisPlatSpe->libelle ?>">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label for="active" class="form-label">Active:</label>
                        <select class="form-select" name="active" id="active">
                          <?php foreach ($active as $active): 
                            if ($DisPlatSpe->active == $active->active){?>
                            <option selected value="<?= $active->active ?>"><?= $active->active ?></option>
                            <?php } else {?>
                            <option value="<?= $active->active ?>"><?= $active->active ?></option>
                          <?php } endforeach; ?>
                        </select>
                    </div>
                </div>
                </div>
                <div class="row no-gutters align-items-center">
                    <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label for="prix" class="form-label">Prix:</label>
                        <input type="text" name="prix" class="form-control" id="prix" value="<?= $DisPlatSpe->prix ?>">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label for="artist" class="form-label">Categorie:</label>
                        <select class="form-select" name="categorie" id="categorie">
                          <?php foreach ($categorie as $categorie): 
                            if ($DisPlatSpe->id_categorie == $categorie->id){?>
                            <option selected value="<?= $categorie->id ?>"><?= $categorie->libelle ?></option>
                            <?php } else {?>
                            <option value="<?= $categorie->id ?>"><?= $categorie->libelle ?></option>
                          <?php } endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                  <label for="desc" class="form-label">Description</label>
                  <textarea class="form-control" id="desc" name="desc" rows="3"><?= $DisPlatSpe->description ?></textarea>
                </div>
                </div>
                    <div class="mb-3">
                        <label for="picture" class="form-label">Image:</label>
                        <input type="file" class="form-control" id="picture" name="picture" value="<?= $DisPlatSpe->image ?>">
                    </div>
                    <div class="mb-3">
                        <input  type="hidden" name="id" class="form-control" id="id" value="<?= $id ?>">
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary mx-2">Submit</button>
                    <button type="cancel" name="cancel" class="btn btn-primary">Cancel</button>
            </form>
        </div>
    </div>
</div>