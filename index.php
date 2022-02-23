<?php 

if (isset($_FILES['photo'])
    && $_FILES['photo']['error'] == 0)
{
    $tmp = $_FILES['photo']['tmp_name'];
    $filename = $_FILES['photo']['name'];
    $fileNameArray = explode(".", $filename);  
    $finalName = $fileNameArray[0].uniqid().'.'.$fileNameArray[1];
    $destination = 'assets/img/';
    $type = $_FILES['photo']['type'];
    $size = $_FILES['photo']['size'];
    if ($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png' && $size < 1000000) {
        if (move_uploaded_file($tmp, $destination . $finalName)) {
            echo 'téléchargement réussi';
        }
    }else {
        echo '- Format incorrect, veuillez choisir une image au format jpg ou jpeg';
    }
    if ($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png' && $size < 1000000) {
        if (move_uploaded_file($tmp, $destination . $finalName)) {
            echo 'téléchargement réussi';
        }
    }else {
        echo '<br>- Image trop lourde, veuillez choisir une image inférieur à 1 MO';
    }
    
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script async src="./uploadPreview/uploadPreview.js"></script>
</head>
<body>
    <div class="upload-wrapper">
        <h1>Veuillez choisir une image :</h1>
        <img id="imgPreview">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="photo" id="fileToUpload">
            <button type="submit"><ion-icon name="cloud-upload-outline"></ion-icon>UPLOAD</button>
        </form>
    </div>



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>