<?php
if (session_status() == PHP_SESSION_NONE) {session_start();}
require 'dao.php';
require 'header.php';
require 'assets/content/viewer/index_content.php';
require 'footer.php';
?>