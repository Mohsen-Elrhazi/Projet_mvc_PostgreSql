<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="assets/css/Auth/auth.css">

</head>

<body>
    <div class="form-container">
        <form action="/register" method="POST" class="register-form">
            <h1>Créer un compte</h1>
            <div class="input-group">
                <input type="text" id="fullname" name="firstName" placeholder="First Name" />
            </div>
            <div class="input-group">
                <input type="text" id="fullname" name="lastName" placeholder="Last Name" />
            </div>
            <div class="input-group">
                <input type="email" id="email" name="email" placeholder="Email" />
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Password" />
            </div>

            <button type="submit">S'inscrire</button>
            <p class="login-link">Déjà un compte ? <a href="/login">Se connecter</a></p>
        </form>
    </div>
</body>

</html>