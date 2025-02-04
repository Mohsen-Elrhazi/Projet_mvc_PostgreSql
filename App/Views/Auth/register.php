<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../../../public/assets/css/auth.css">

</head>

<body>
    <div class="form-container">
        <form action="#" method="POST" class="register-form">
            <h1>Créer un compte</h1>
            <div class="input-group">
                <input type="text" id="fullname" name="fullname" placeholder="Name" />
            </div>
            <div class="input-group">
                <input type="email" id="email" name="email" placeholder="Email" />
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Password" />
            </div>
            <div class="input-group">
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" />
            </div>
            <button type="submit">S'inscrire</button>
            <p class="login-link">Déjà un compte ? <a href="">Se connecter</a></p>
        </form>
    </div>
</body>

</html>