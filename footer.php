<footer class="py-5 bg-black d-flex justify-content-center">
    <div class="row no-gutters mx-auto text-white">
    <div class="col-md-3 mb-3 text-center">
        <img src="assets/img/the_district_brand/logo.png" alt="...">
        <br>
        <a href="#"><i class="fa-brands fa-facebook mt-3 mx-1"></i></a>
        <a href="#"><i class="fa-brands fa-instagram mt-3 mx-1"></i></a>
        <a href="#"><i class="fa-brands fa-twitter mt-3 mx-1"></i></a>
    </div>
    <div class="col-6 col-md-3 mb-3 text-center">
      <h5 class="text-white">Accès rapide</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Découvrir</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Notre carte</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">FAQ</a></li>
      </ul>
    </div>
    <div class="col-6 col-md-3 mb-3 text-center">
      <h5 class="text-white">Services consommateurs</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Informations allergènes</a></li>
      </ul>
    </div>
    <div class="col-6 col-md-3 mb-3 text-center">
      <h5 class="text-white">Informations légales</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="mentions.php" class="nav-link p-0">Mentions légales</a></li>
        <li class="nav-item mb-2"><a href="politique.php" class="nav-link p-0">Politique de confidentialité</a></li>
      </ul>
    </div>

    <div class="border-top pt-4 text-center">
      <p>© 2023 Company, Inc. All rights reserved.</p>
      <?php if (isset($_SESSION['login'])){ ?>
      <p><a href="admin.php">Panneau administrateur</a></p>
      <?php }?>
    </div>
  </footer>
  <script src="https://kit.fontawesome.com/21333c98b9.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>