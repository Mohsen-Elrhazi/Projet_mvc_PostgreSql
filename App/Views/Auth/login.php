<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <!--Bottstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/Auth/auth.css">

</head>

<body>
    <div class="form-container">
        <?php
        // if (session_status() === PHP_SESSION_NONE) {
        //     session_start();
        //     }
            
        // if (isset($_SESSION['error'])) {
        //     echo "<div class='alert alert-danger text-center'>".$_SESSION['error']."</div>";
        //     unset($_SESSION['error']);
        // }
        ?>
        <form action="" method="POST" class="register-form">
            <h1>Se connecter</h1>
            <div class="input-group">
                <input type="email" id="email" name="email" placeholder="Email" />
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Password" />
            </div>
            <button type="submit">Register</button>
            <p class="login-link">Vous n'avez pas de compte ? <a href="/register">S'inscrire</a></p>
        </form>
    </div>
</body>

</html>