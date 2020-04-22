<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Mon profil</title>
</head>
<body>
    
    <header>
        <nav>
            <a href="#">Accueil</a>
            <a href="#">Profil</a>
            <a href="#">Commerce</a>
            <a href="#">Panier</a>
            <a href="#">Se déconnecter</a>
        </nav>
    </header>
    <main>
        <h1>Mon compte</h1>
    <form action="" method="POST">
            <div>
                <input type="text" name="" placeholder="Votre speudo" required>
                <input type="password" name="" required placeholder="Votre mot de passe" size = 15 pattern=".{6,}" title="Le mot de passe doit contenir au moins 6 caractères, 1 lettre, 1 chiffre, et 1 caractère spécial.">
            </div>
            <div >
                <input type="text" id="firstname" name="" placeholder="Votre prénom" required>
                <input type="text" id="name" name="" placeholder="Votre nom" required>
            </div>
            <div> 
                <input type="email" id="email" name="" placeholder="Votre email" required>
                <input type="email" id="confirmation_mail" placeholder="Confirmer votre email" name="" required>
            </div>
            <input type="text" id="address" name="" placeholder="Votre adresse" required>
                
            <div>
                <input type="number" id="code_postal" name="" placeholder="Votre code postal" required pattern="/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/">
                <input type="text" id="ville" name="" placeholder="Votre ville" required>
            </div>
    
            <input type="tel" id="telephone" name="" placeholder="06XXXXXXXX">
            <input type="submit" value="Modifier">
        </form>
        <hr class="profil_hr">
        <section>
            <h1>Mes commandes</h1>
        </section>
    </main>

    <footer>
        <nav class="nav_footer">
            <a href="#">Accueil</a>
            <a href="#">Profil</a>
            <a href="#">Commerces</a>
            <a href="#">Panier</a>
            <a href="#">Admin</a>
            <a href="#">Se déconnecter</a>
        </nav>
    </footer>
</body>
</html>