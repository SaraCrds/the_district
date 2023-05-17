<?php

if (session_status() == PHP_SESSION_NONE) {session_start();}

?>

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body class="body-bg bg-black m-0 p-0">
<header>
    <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar fixed-top bg-black px-5" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo District</a>
    <button class="navbar-toggler border border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <!-- <span class="navbar-toggler-icon"></span> -->
      <span class="material-symbols-outlined">
      lunch_dining
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item text-primary align-content-center py-2">
        ✦
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="categorie.php">Notre Carte</a>
        </li>
        <li class="nav-item text-primary align-content-center py-2">
        ✦
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Contact</a>
        </li>
        <li class="nav-item text-primary align-content-center py-2">
        ✦
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="login.php"><i class="fa-regular fa-user"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>