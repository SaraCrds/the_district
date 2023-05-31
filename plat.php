<?php 
if (session_status() == PHP_SESSION_NONE) {session_start();}
require "header.php";
require "assets/content/viewer/plat_content.php";
require "footer.php";
?>