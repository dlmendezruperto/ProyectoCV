<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    session_destroy();
    header('Location: cerrarsesion.php');
    exit;
  } else {
    header('Location: cerrarsesion.php');
    exit;
  }

?>