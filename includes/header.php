<?php include 'config.php'?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/portal.css" />
    <link rel="stylesheet" href="css/aia.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
</head>
<body>
<!--start wrapper-->
<div class="wrapper">
<header>
  <h1><a href="index.php">Catherine Blake Smith's SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1)?>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
<!--start left column-->
<section>
    <div id="logoID"><i class="logo fa <?=$logo?>"></i><h2 class="pageID"><?=$PageID?></h2></div>
<!--end header.php-->