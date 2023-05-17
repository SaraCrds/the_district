<?php 
$id = PlatGetId();
$DisPlatSpe = AdminPlatSpe($id);
$active = AdminActive();

?>

<div class="bg-plat-page">
    <div class="col-md-11 mx-auto">
    <a href="javascript:history.back()" class="text-white mb-2"> <i class="fa-solid fa-arrow-left pe-2"></i> Go Back</a>
    </div>
    <div class="row no-gutters bg-black col-11 mx-auto mb-5 py-3">
    <div class="col-md-6 bg-black p-0 d-flex justify-content-center">
            <img src="assets/img/food/<?= $DisPlatSpe->image ?>" class="w-50">
        </div>
        <div class="col-md-6 p-0 bg-black py-3 px-4">
            <form class="px-5 pt-4 h-50 text-white pb-5" action ="script_plat_modify.php" method="post" enctype="multipart/form-data">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label for="title" class="form-label">Libelle:</label>
                        <input type="text" name="title" class="form-control" id="title" value="<?= $DisPlatSpe->libelle ?>">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label for="artist" class="form-label">Active:</label>
                        <select class="form-select" name="artist" id="artist">
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