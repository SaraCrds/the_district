<?php 

$id = PlatGetId();
$userdetail= ShowProfile($id);

?>

<div class="bg-plat-page">
<div class="row no-gutters col-md-8 col-12 mx-auto mb-5">
        <div class="col-md-3 platspe p-0">
        <img src="../../assets/img/the_district_brand/logo.png" class="object-fit-contain">
        </div>
        <div class="col-md-9 platspe p-0 bg-black py-3 px-4">
        <form class="text-white">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom et Prénom</label>
            <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nameHelp" value="<?= $userdetail->nom_prenom ?>">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value= "<?= $userdetail->email ?>">
          </div>
          <div class="mb-3">
            <label for="newmdp" class="form-label">Nouveau Mot de Passe</label>
            <input type="password" class="form-control" id="newmdp" name="newmdp">
          </div>
          <div class="mb-3">
            <label for="mdp" class="form-label">Mot de Passe Actuel</label>
            <input type="password" class="form-control" id="mdp" name="mdp">
          </div>
          <input type="text" class="form-control" id="id" name="id" value="<?= $id ?>" hidden>
          <button type="submit" class="btn btn-primary">Modifier</button>
          <button type="submit" class="btn btn-danger">Supprimer le compte</button>
        </form>
        </div>
</div>