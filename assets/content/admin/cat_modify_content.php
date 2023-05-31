<?php 
$id = PlatGetId();
$DisPlat = AdminPlat($id);
$DisCatSpe = AdminCatSpe($id);
$active = AdminActive();

?>

<div class="bg-plat-page">
    <div class="col-md-11 mx-auto">
    <a href="javascript:history.back()" class="text-white mb-2"> <i class="fa-solid fa-arrow-left pe-2"></i> Go Back</a>
    </div>
    <div class="row no-gutters bg-black col-11 mx-auto mb-5 py-3">
    <div class="col-md-6 bg-black p-0 d-flex justify-content-center">
            <img src="assets/img/category/<?= $DisCatSpe->image ?>" class="w-50">
        </div>
        <div class="col-md-6">
            <form class="px-5 pt-4 h-50 text-white pb-5" action ="assets/content/script/script_modify_category.php" method="post" enctype="multipart/form-data">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label for="libelle" class="form-label">Libelle:</label>
                        <input type="text" name="libelle" class="form-control" id="libelle" value="<?= $DisCatSpe->libelle ?>">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label for="active" class="form-label">Active:</label>
                        <select class="form-select" name="active" id="active">
                          <?php foreach ($active as $active): 
                            if ($DisCatSpe->active == $active->active){?>
                            <option selected value="<?= $active->active ?>"><?= $active->active ?></option>
                            <?php } else {?>
                            <option value="<?= $active->active ?>"><?= $active->active ?></option>
                          <?php } endforeach; ?>
                        </select>
                    </div>
                </div>
                </div>
                    <div class="mb-3">
                        <label for="picture" class="form-label">Image:</label>
                        <input type="file" class="form-control" id="picture" name="picture" value="<?= $DisCatSpe->image ?>">
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
    <div class="row no-gutters bg-black col-11 mx-auto shadow-none py-3">
    <?php foreach ($DisPlat as $DisPlat): ?>
    <div class="row no-gutters col-md-4 col-12 mx-auto shadow-none">
        <div class="col-md-6 platspe bg-black p-0">
            <img src="assets/img/food/<?= $DisPlat->plat_image ?>" class="w-100">
        </div>
        <div class="col-md-6 platspe p-0 bg-black py-3 px-4">
            <p class="platspe_lib text-white mb-3"><?= $DisPlat->plat_libelle ?></p>
            <a class="text-white" href="plat_modify.php?id=<?= $DisPlat->plat_id ?>"><span class="material-symbols-outlined">settings</span></a>
            <a class="text-white" href="assets/content/script/script_delete_plat.php?id=<?= $DisPlat->plat_id ?>" onclick="return confirm('Voulez-vous supprimer ce plat? /n Ce n`est pas réversible')"><span class="material-symbols-outlined">delete</span></a>
        </div>
    </div>
    <?php endforeach ?>
    </div>
</div>