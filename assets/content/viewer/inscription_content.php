<div class="bg-plat-page">
<div class="col-12 text-white">
<h2 class="text-white text-center">S'inscrire</h2>
<div class="erreur text-danger text-center">
<!-- display error here -->
</div>
<form class="col-md-6 col-11 mx-auto" action ="assets/content/script/script_inscription.php" method="post">
    <div class="row my-4 shadow-none">
      <div class="col ">
        <label for="exampleInputLastName" class="form-label">Nom de Famille</label>
        <input type="text" class="form-control" placeholder="DOE" aria-label="nom" name="nom" id="nom">
      </div>
      <div class="col ">
        <label for="exampleInputLastName" class="form-label">Prénom</label>
        <input type="text" class="form-control" placeholder="John" aria-label="prenom" name="prenom" id="prenom">
      </div>
    </div>
    <div class="mb-4">
      <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
      <input type="email" class="form-control" name ="mail" id="mail" aria-describedby="emailHelp">
    </div>
    <div class="mb-4">
      <label for="exampleInputPassword1" class="form-label">Mot de Passe</label>
      <input type="password" class="form-control" name="password" id="password">
    </div>
    <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>
</div>
<p class="col-md-6 col-11 mx-auto mt-3">
    <a class="text-white" href="login.php">Déjà un compte? Cliquez ici pour vous connecter</a>
</p>
</div>