<?php 
    require_once('../partie2/controllers/index-controller.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AllPix</title>
    <link rel="stylesheet" href="./views/assets/css/style.css">
</head>
<body>
    <?php 
    include_once('../partie2/views/includes/header.php')
    ?>
    <main>
        <section class="main-content">
            <h1>Sign In</h1>
            <form action="" method="post">
                <div class="login-wrapper">
                    <label for="login">Login</label>
                    <input type="text" name="login">
                </div>
                <div class="password-wrapper">
                    <label for="password">Password</label>
                    <input type="text" name="password">
                </div>
                <button type="submit" class="btn-submit">Sign In</button>
            </form>
        </section>
        
    </main>
</body>
</html>