<?php

require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
require($_SERVER['DOCUMENT_ROOT'] . '/configs/helpers.php');

// якщо сесії не існує, стартуємо сесію
if(!isset($_SESSION)) {                               
	session_start(); 
}

?>

<!DOCTYPE html>

<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Portfolio</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- theme meta -->
  <meta name="theme-name" content="thomson" />
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../../assets/plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="../../assets/plugins/counto/animate.css">
  <link rel="stylesheet" href="../../assets/plugins/aos/aos.css">
  <link rel="stylesheet" href="../../assets/plugins/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="../../assets/plugins/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="../../assets/plugins/magnific-popup/magnific-popup.css">
  <link rel="stylesheet" href="../../assets/plugins/animated-text/animated-text.css">

  <!-- Main Stylesheet -->
  <link href="../../assets/css/style.css" rel="stylesheet">

</head>

<body>

