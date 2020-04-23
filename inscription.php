<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription particuliers</title>
    <link href="css/styles.css" rel="stylesheet">
</head>
<body class="inscription-body">
    <header>
        <nav>
            <a href="#">Accueil</a>
            <a href="#">Profil</a>
            <a href="#">Commerce</a>
            <a href="#">Panier</a>
            <a href="#">Se déconnecter</a>
        </nav>
    </header>
    <main class="inscription-main">
        <div class="inscription-main-div">
            <h1>S'inscrire</h1>
            <form action="" method="POST">
                
                <div >
                    <input type="text"  name="" placeholder=" Votre prénom" required>
                    <input type="text"  name="" placeholder=" Votre nom" required>
                </div>
                
                <div> 
                    <input type="email"  name="" placeholder=" Votre email" required>
                    <input type="tel"  name="" placeholder=" 06XXXXXXXX">
                </div>

                <div>
                    <input type="password" name="" placeholder=" Votre mot de passe" size = 15 pattern=".{6,}" title="Le mot de passe doit contenir au moins 6 caractères, 1 lettre, 1 chiffre, et 1 caractère spécial." required>
                    <input type="password" name="" placeholder=" Confirmer votre mot de passe" size = 15 pattern=".{6,}" title="Le mot de passe doit contenir au moins 6 caractères, 1 lettre, 1 chiffre, et 1 caractère spécial." required>
                </div>

                <input type="text"  name="" placeholder=" Votre adresse" required>
                    
                <div>
                    <input type="number"  name="" placeholder=" Votre code postal" required pattern="/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/">
                    <input type="text"  name="" placeholder=" Votre ville" required>
                </div>
        
                
                

                <input type="submit">
            </form>
        </div>
        <img src="src/images/marseilleshop.png" alt="logo">
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