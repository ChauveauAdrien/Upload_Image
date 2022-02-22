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
            <input type="file" name="fileToUpload" id="fileToUpload">
            <button type="submit"><ion-icon name="cloud-upload-outline"></ion-icon>UPLOAD</button>
        </form>
    </div>



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>