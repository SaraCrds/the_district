<?php 
if (session_status() == PHP_SESSION_NONE) {session_start();}
include "header.php";
include "dao.php";
if (isset($_SESSION['login'])){ 
    include "assets/content/admin/plat_modify_content.php";
}

else {
    header("index.php");
    exit();
}
include "footer.php";
?>