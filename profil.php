<?php 
if (session_status() == PHP_SESSION_NONE) {session_start();}
require "dao.php";
if (isset($_SESSION['login'])){ 
    require "header.php";
    require "assets/content/viewer/profile_content.php";
    require "footer.php";
}

else {
    header("index.php");
    exit();
}
?>