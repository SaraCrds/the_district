<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The District</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body class="body-bg bg-black m-0 p-0">
<nav class="navbar navbar-expand-lg navbar fixed-top bg-black px-5" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo District</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item text-primary align-content-center py-2">
        ✦
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Catégorie
          </a>
          <ul class="dropdown-menu bg-black">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item text-primary align-content-center py-2">
        ✦
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Plats
          </a>
          <ul class="dropdown-menu bg-black">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item text-primary align-content-center py-2">
        ✦
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- dellater -->
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active img-carou">
                <img src="assets/img/bg1.jpeg" class="d-block" alt="...">
              </div>
              <div class="carousel-item img-carou">
                <img src="assets/img/bg2.jpg" class="d-block" alt="...">
              </div>
              <div class="carousel-item img-carou">
                <img src="assets/img/bg3.png" class="d-block" alt="...">
              </div>
              <div class="carousel-caption d-flex flex-column justify-content-center h-100 p-0">
                  <h1>The District</h1>
                  <p class="slogan text-primary">Découvrez de nouvelles saveurs!</p>
                </div>
            </div>
          </div>
            <div class="py-5 plat-bg">
              <h2 class="text-white text-center">Nos différentes catégories</h2>
              <h3 class="text-primary text-center pb-5">Essayez notre nouvelle selection</h3>
              <div class="row justify-content-center w-100 col-9 cate">
                  <div class="col-6 col-md-2 p-0 justify-content-center">
                      <a class="p-0 text-white" href="">
                        <img src="assets/img/menu-burger.jpg" class="d-block w-100 mx-auto" alt="...">
                        <div class="pt-2 text-center text-break">
                          <h4 class="text-white">Nom Cat</h4>
                        </div>
                      </a>
                  </div>
              <!-- DELETE LATER WHEN PHP DONE -->
                  <div class="col-6 col-md-2 p-0 justify-content-center">
                      <a class="p-0 text-white" href="">
                        <img src="assets/img/menu-burger.jpg" class="d-block w-100 mx-auto" alt="...">
                        <div class="pt-2 text-center text-break">
                          <h4 class="text-white">Nom Cat</h4>
                        </div>
                      </a>
                  </div>
                  <div class="col-6 col-md-2 p-0 justify-content-center">
                      <a class="p-0 text-white" href="">
                        <img src="assets/img/menu-burger.jpg" class="d-block w-100 mx-auto" alt="...">
                        <div class="pt-2 text-center text-break">
                          <h4 class="text-white">Nom Cat</h4>
                        </div>
                      </a>
                  </div>
                  <div class="col-6 col-md-2 p-0 justify-content-center">
                      <a class="p-0 text-white" href="">
                        <img src="assets/img/menu-burger.jpg" class="d-block w-100 mx-auto" alt="...">
                        <div class="pt-2 text-center text-break">
                          <h4 class="text-white">Nom Cat</h4>
                        </div>
                      </a>
                  </div>
              <!-- END DELETE -->
              </div>
            </div>
            <div class="row no-gutters w-100 m-0">
            <div class="col-3 col-md plat p-0">
              <div>
                <img src="assets/img/menu-burger.jpg" class="w-100" alt="...">
              </div>
                <div class="bg-dark py-3 text-center h-50">
                  <p class="text-white m-0 px-3">
                    Nom Plat
                  </p>
                  <a class="p-0 text-white" href="">
                    <br>Commander
                  </a>
                </div>
            </div>
            <!-- DELETE LATER WHEN PHP DONE -->
            <div class="col-3 col-md plat p-0">
              <div>
                <img src="assets/img/menu-burger.jpg" class="w-100" alt="...">
              </div>
                <div class="bg-dark py-3 text-center h-50">
                  <p class="text-white m-0 px-3">
                    Nom Plat 123456
                  </p>
                  <a class="p-0 text-white" href="">
                    <br>Commander
                  </a>
                </div>
            </div>
            <div class="col-3 col-md plat p-0">
              <div>
                <img src="assets/img/menu-burger.jpg" class="w-100" alt="...">
              </div>
                <div class="bg-dark py-3 text-center h-50">
                  <p class="text-white m-0 px-3">
                    Nom Plat 123456
                  </p>
                  <a class="p-0 text-white" href="">
                    <br>Commander
                  </a>
                </div>
            </div>
            <div class="col-3 col-md plat p-0">
              <div>
                <img src="assets/img/menu-burger.jpg" class="w-100" alt="...">
              </div>
                <div class="bg-dark py-3 text-center h-50">
                  <p class="text-white m-0 px-3">
                    Nom Plat 123456
                  </p>
                  <a class="p-0 text-white" href="">
                    <br>Commander
                  </a>
                </div>
            </div>
            <div class="col-3 col-md plat p-0">
              <div>
                <img src="assets/img/menu-burger.jpg" class="w-100" alt="...">
              </div>
                <div class="bg-dark py-3 text-center h-50">
                  <p class="text-white m-0 px-3">
                    Nom Plat 123456
                  </p>
                  <a class="p-0 text-white" href="">
                    <br>Commander
                  </a>
                </div>
            </div>
            <div class="col-3 col-md plat p-0">
              <div>
                <img src="assets/img/menu-burger.jpg" class="w-100" alt="...">
              </div>
                <div class="bg-dark py-3 text-center h-50">
                  <p class="text-white m-0 px-3">
                    Nom Plat 123456
                  </p>
                  <a class="p-0 text-white" href="">
                    <br>Commander
                  </a>
                </div>
            </div>
            <div class="col-3 col-md plat p-0">
              <div>
                <img src="assets/img/menu-burger.jpg" class="w-100" alt="...">
              </div>
                <div class="bg-dark py-3 text-center h-50">
                  <p class="text-white m-0 px-3">
                    Nom Plat 123456
                  </p>
                  <a class="p-0 text-white" href="">
                    <br>Commander
                  </a>
                </div>
            </div>
            <div class="col-3 col-md plat p-0">
              <div>
                <img src="assets/img/menu-burger.jpg" class="w-100" alt="...">
              </div>
                <div class="bg-dark py-3 text-center h-50">
                  <p class="text-white m-0 px-3">
                    Nom Plat 123456
                  </p>
                  <a class="p-0 text-white" href="">
                    <br>Commander
                  </a>
                </div>
            </div>
            <!-- END DELETE LATER -->
          </div>
        <br><br><br>
            <p class="px-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, adipisci esse voluptate voluptatibus eligendi exercitationem, autem vel eaque magnam dolorem dignissimos optio totam dicta laudantium! Voluptatibus excepturi at mollitia fugit vero culpa nam ut quo odio sit officia eos quisquam hic quos iusto earum et qui iure, expedita nulla tenetur eveniet id optio repellendus? Asperiores voluptatem, accusamus sunt necessitatibus quae, eum earum ducimus culpa atque aut repellat ut maiores quidem fuga quisquam officia aliquam! Eaque excepturi voluptates, sint porro necessitatibus fugiat reiciendis debitis impedit quod incidunt delectus omnis consectetur odit deleniti suscipit, fugit blanditiis illum perspiciatis odio? Porro, minus! Officiis, iste delectus reprehenderit repellendus culpa sequi labore consectetur alias dicta natus. Blanditiis dicta dolorem sequi facere doloribus voluptatum, ullam odio minus doloremque, esse neque eveniet similique? Voluptatem, modi. Quas aut minima facere necessitatibus fugiat perspiciatis. Itaque saepe laudantium, dolores nemo laboriosam incidunt eum iure, earum nostrum, consequuntur adipisci ut sunt dolore quaerat sint impedit numquam illum nam culpa natus optio. Similique veniam error atque repellat animi explicabo incidunt, libero beatae ea sunt eveniet assumenda ex deleniti ad consequuntur a corporis voluptatibus. Asperiores impedit dolore minus iusto debitis consequatur eaque reiciendis sequi, maxime, aut blanditiis corporis odio. Itaque, aperiam nisi animi reprehenderit, ut repellat soluta recusandae, non fugit veritatis esse sed? Fugit repellendus molestias delectus illum ratione vel dolorem eaque sequi? Est soluta repudiandae, quaerat obcaecati impedit a cupiditate quasi deserunt nihil! Maxime, illo excepturi, obcaecati molestias voluptatibus ipsam saepe voluptates rem vitae quia aliquid! Mollitia consequatur vero dolorum fuga delectus, dignissimos obcaecati! Quam mollitia quibusdam quis iusto, sapiente omnis eveniet nesciunt sequi accusantium culpa laborum. Minima aspernatur adipisci iure porro omnis amet optio doloribus deserunt esse nemo, reprehenderit rem quibusdam voluptatibus et repellendus velit distinctio natus laudantium. Maiores, fugiat delectus facere atque earum adipisci veniam nostrum laborum qui dolores error! Ipsam blanditiis, atque, eaque quia cupiditate voluptatem dolorum molestiae recusandae, perferendis quod nisi deserunt aspernatur rem laboriosam unde fugiat officiis animi officia magnam. Veniam dolorem esse dignissimos, reprehenderit, consequuntur, obcaecati recusandae reiciendis ipsum excepturi tempore unde libero. Molestiae quidem consequatur eveniet dicta odit, ea dolorum tempora sunt? Sit enim corporis asperiores laborum voluptatibus tempora nulla fuga adipisci accusamus nobis perferendis possimus eligendi, autem voluptate recusandae libero sapiente doloribus, corrupti dolorem dolore vel culpa. Officia, tempora nam dicta error corrupti aut non deserunt ea nulla blanditiis odio aliquam saepe explicabo consequuntur nisi quam eveniet necessitatibus laborum similique. Et voluptate modi distinctio vero natus recusandae vitae numquam harum? Eaque porro natus expedita vel ea ad corporis. Facilis illo magnam ullam ratione aperiam assumenda qui. Iusto quasi reprehenderit nisi non hic tempore doloremque tempora, eius voluptates cum fugiat laboriosam rerum corporis officiis maiores! Culpa accusantium magnam corporis dicta repudiandae eius dolore aperiam, distinctio, qui hic voluptates! Ipsam cumque sunt aspernatur est magni architecto voluptates nobis illum odit sit exercitationem, nostrum in nesciunt optio deserunt ut sed dicta fugit perspiciatis facere unde. Ipsum ipsam earum similique facilis itaque ipsa saepe. Autem, eum itaque eaque a repellendus delectus tempore et quae, voluptas, tenetur in dolorum!</p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>