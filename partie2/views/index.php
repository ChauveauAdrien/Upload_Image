<?php 
    require_once('../controllers/index-controller.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AllPix</title>
    <link rel="stylesheet" href="./assets/css/style.css?version=<?= time(); ?>">
</head>
<body>
    <header class="header-wrapper">
        <nav>
            <a href="">AllPiX</a>
        </nav>
    </header>
    <main>
        <section class="main-content">
            <h1>Connection</h1>
            <form action="" method="post">
                <div class="login-wrapper">
                    <label for="login">Login</label>
                    <input type="text" name="login">
                </div>
                <div class="password-wrapper">
                    <label for="password">Password</label>
                    <input type="text" name="password">
                </div>
                <button type="submit" class="btn-submit">Login</button>
            </form>
        </section>
        
    </main>
</body>
</html>