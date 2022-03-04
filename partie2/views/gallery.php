<?php
if (!isset($_SESSION['id'])) {
    header("Location: http://part1.test/partie2/");
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../node_modules/lightbox2/dist/css/lightbox.css" rel="stylesheet" />
    <title>AllPix-Gallery</title>
</head>
<body>
    <?php 
    include_once($_SERVER['DOCUMENT_ROOT']."\partie2\\views\includes\header.php");
    ?>
    <div class="gallery-title">
        <h1 class="gallery-h1">My Collection</h1>
    <div class="separator"></div>
    </div>

    <!-- lightbox -->
    <script src="path/to/lightbox.js"></script>
</body>
</html>