<?php 
if (session_status() == PHP_SESSION_NONE) {session_start();}
require "dao.php";
if (($_SESSION['login'])==2){ 
    require "header.php";
    require "assets/content/admin/commande_modify_content.php";
    require "footer.php";
}

else {
    header("index.php");
    exit();
}
?>