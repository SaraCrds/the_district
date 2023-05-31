<?php 
if (session_status() == PHP_SESSION_NONE) {session_start();}
require "header.php";
require "dao.php";
if (isset($_SESSION['login'])){ 
    require "assets/content/admin/logged_content.php";
}

else {
    require "assets/content/viewer/login_content.php";
}
include "footer.php";
?>