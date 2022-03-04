<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AllPix</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php 
    include_once('../partie2/views/includes/header.php')
    ?>
    <main>
        <section class="main-content">
            <h1>Sign In</h1>
            <form action="../partie2/controllers/index-controller.php" method="post">
                <div class="login-wrapper">
                    <label for="id">Login</label>
                    <input type="text" name="username" >
                </div>
                <div class="password-wrapper">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
                <div class="error-wrapper">
                    <?php
                    // si il y a une erreur sur le mot de passe ou l'identifiant, affichage du message d'erreur
                    if (isset($_GET['erreur'])) {
                        if ($_GET['erreur'] == -1) {
                            echo "<p>mot de passe ou identifiant incorrects</p>";
                            $erreurAnim = "wrong";

                        }
                    }
                        
                    ?>
                    <button type="submit" class="btn-sign-in <?php echo $erreurAnim ?>" name="login">Sign In</button>
                </div>
                
                
            </form>
        </section>
        
    </main>
</body>
</html>