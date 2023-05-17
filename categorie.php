<?php 
if (session_status() == PHP_SESSION_NONE) {session_start();}
include "header.php";
include "dao.php";
include "assets/content/viewer/categorie_content.php";
include "footer.php";
?>
