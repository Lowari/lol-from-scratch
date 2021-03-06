<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Home</title>
</head>

<body>

    <div id="container_connexion">
        <header>
            <nav>
                <a href="../index.php" id="logo_navbar"><span>Logo</span></a>
                <div>
                    <form action="index.php" method="POST" hidden>
                        <input type="search" placeholder="Rechercher" hidden disabled>
                        <button type="button" hidden><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <ul>
                    <li><a class="here" href="../index.php">Home</a></li>
                    <li><a href="connexion.php">Connexion - Inscription</a></li>
                </ul>
                <button id="burger-menu">
                    <i class="fas fa-chevron-circle-down fa-lg"></i>
                </button>
            </nav>
        </header>

        <main>

            <form action="connexion.php" method="POST">
                <div class="titre">
                    <h1>Rappel moi qui tu es !</h1>
                    <p>j'ai la mémoire courte ..</p>
                </div>
                <div class="input_size">
                    <div class="flex_input">
                        <label for="email">Adresse mail</label>
                        <input type="email" id="email_connexion" name="email">
                        <span id="error_mail_connexion"></span>
                    </div>
                    <div class="flex_input">
                        <label for="password_connexion">Mot de passe</label>
                        <input type="password" id="password_connexion" name="password">
                        <span id="error_password_connexion"></span>
                    </div class="input_size">
                </div>
                <div>
                    <button type="button" id="connect">Se connecter</button>
                </div>
            </form>
        </main>

        <footer>
            <p>Pas encore inscrit ?</p>
            <a href="inscription.php">Je m'inscris !</a>
        </footer>

        <aside id="img1_left_connexion">
            <img src="../assets/img/yasuo2.jpg" alt="Yasuo en noir et blanc">
        </aside>
        <aside id="img2_right_connexion">
            <img src="../assets/img/yasuo.jpg" alt="Yasuo qui brandi son épée">
        </aside>
    </div>

    <script src="../assets/js/script.js"></script>
</body>

</html>