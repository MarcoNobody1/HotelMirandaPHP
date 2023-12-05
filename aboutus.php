<?php
session_start();
require_once("setup.php");
unset($_SESSION['arrival']);
unset($_SESSION['departure']);

echo $blade->run("aboutus");

?>