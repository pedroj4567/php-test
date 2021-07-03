<?php 
// CIERRE DE SESION
session_start();

session_unset();
session_destroy();

header("Location: index.php");