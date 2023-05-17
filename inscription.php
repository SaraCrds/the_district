<?php 
if (session_status() == PHP_SESSION_NONE) {session_start();}
include "header.php";
include "dao.php";
if (isset($_SESSION['login'])){ 
    include "assets/content/admin/logged_content.php";
}

else {
    include "assets/content/viewer/inscription_content.php";
}
include "footer.php";
?>