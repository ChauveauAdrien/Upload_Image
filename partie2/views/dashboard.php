<?php

date_default_timezone_set('Europe/Paris');
setlocale(LC_ALL, 'fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8');

if (!isset($_SESSION['id'])) {
    header("Location: http://part1.test/partie2/");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script async src="../assets/js/script.js"></script>
    <title>AllPix-Accueil</title>
</head>
<body>
    <?php 
    
        include_once($_SERVER['DOCUMENT_ROOT']."\partie2\\views\includes\header.php");
    ?>
    <h1 class="dashboard-h1">Hello, <?= ucfirst($_SESSION['username']);?></h1>
    <?php 
            $days = [1=>'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
            $months = [1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juiller', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
            $currentDays = $days[date('N')];
            $currentMonth = $months[date('n')];
            $date = $currentDays.' '.date("d").' '.$currentMonth.' '.date("Y").', il est '.date("H\h i");
            echo "<p class=\"dashboard-date\">$date</p>"
    ?>
    <main class="dashboard-main">
        <section class="user-info">
            <h2 class="user-info-h2"><a href="http://part1.test/partie2/"><ion-icon name="log-out-outline" class="logout" title="log out"></ion-icon></a><?= ucfirst($_SESSION['username']);?></h2>
            <p>Quota : <?= $_SESSION['quota'];?></p>
            <p>Nombre d'images : <?= $_SESSION['quota'];?></p>
            <nav class="link-gallery">
                <a href="../controllers/gallery-controllers.php"> Voir votre gallerie</a>
            </nav>

        </section>
        <section class="upload">
            <div class="upload-wrapper">
                <h1>Veuillez choisir une image :</h1>
                <img id="imgPreview">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="file" name="photo" id="fileToUpload">
                    <button type="submit"><ion-icon name="cloud-upload-outline"></ion-icon>UPLOAD</button>
                </form>
            </div>
        </section>
        
    </main>
    <!-- icones -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>