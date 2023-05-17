<?php
if (session_status() == PHP_SESSION_NONE) {session_start();}
include 'dao.php';
include 'header.php';
include 'assets/content/viewer/index_content.php';
include 'footer.php';
?>