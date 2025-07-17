<?php
session_start();
session_unset();
session_destroy();
header("Location: mainpage.php");  // logout ke baad wapas homepage
exit;
?>
