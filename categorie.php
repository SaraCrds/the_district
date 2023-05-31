<?php 
if (session_status() == PHP_SESSION_NONE) {session_start();}
require "header.php";
require "dao.php";
require "assets/content/viewer/categorie_content.php";
require "footer.php";
?>
