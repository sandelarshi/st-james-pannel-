<?php
session_start();
session_destroy();
unset ($_SESSION["uname"]);
unset ($_SESSION["id"]);
include ("../INCLUDE/CHECK.PHP");
?>
