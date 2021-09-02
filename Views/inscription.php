<?php
require "../Controllers/Controller_inscription.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Inscription</title>
</head>

<body>

    <div id="container_inscription">
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
                    <li><a href="connexion.php" class="currentPage">Connexion - Inscription</a></li>
                </ul>
                <button id="burger-menu">
                    <i class="fas fa-chevron-circle-down fa-lg"></i>
                </button>
            </nav>
        </header>

        <main>
            <form action="inscription.php" method="POST">

                <div class="title">
                    <h3>Inscription</h3>
                    <p>il ne manque que toi</p>
                </div>

                <div class="group_input">
                    <div class="input_side_inscription">
                        <div class="input_flex">
                            <label for="name">Nom</label>
                            <input type="text" name="name" id="name" placeholder="Nom" class="<?= isset($errorMsgInscription['name']) ? "wrong" : "" ?><?= isset($successMsgInscription['name']) ? "good" : "" ?>" value="<?= isset($_POST['name']) ? htmlspecialchars($name) : "" ?>" required>
                            <span id="error_message_name"><?= isset($errorMsgInscription['name']) ? $errorMsgInscription['name'] : "" ?></span>
                        </div>

                        <div class="input_flex">
                            <label for="first_name">Prénom</label>
                            <input type="text" id="first_name" name="first_name" placeholder="Prénom" class="<?= isset($errorMsgInscription['firstname']) ? "wrong" : "" ?><?= isset($successMsgInscription['firstname']) ? "good" : "" ?>" value="<?= isset($_POST['first_name']) ? htmlspecialchars($firstname) : "" ?>" required>
                            <span id="error_first_name"><?= isset($errorMsgInscription['firstname']) ? $errorMsgInscription['firstname'] : "" ?></span>
                        </div>

                        <div class="input_flex">
                            <label for="pseudo">Choisis ton pseudo</label>
                            <input type="text" id="pseudo" name="pseudo" placeholder="pseudo" class="<?= isset($errorMsgInscription['pseudo']) ? "wrong" : "" ?><?= isset($successMsgInscription['pseudo']) ? "good" : "" ?>" value="<?= isset($_POST['pseudo']) ? htmlspecialchars($pseudo) : "" ?>" required>
                            <span id="error_pseudo"><?= isset($errorMsgInscription['pseudo']) ? $errorMsgInscription['pseudo'] : "" ?></span>
                        </div>
                    </div>

                    <div class="input_side_inscription">
                        <div class="input_flex">
                            <label for="email">Ton e-mail</label>
                            <input type="email" id="email" name="email" placeholder="email" class="<?= isset($errorMsgInscription['email']) ? "wrong" : "" ?><?= isset($successMsgInscription['email']) ? "good" : "" ?>" value="<?= isset($_POST['email']) ? htmlspecialchars($email) : "" ?>" required>
                            <span id="error_email_inscription"><?= isset($errorMsgInscription['email']) ? $errorMsgInscription['email'] : "" ?></span>
                        </div>

                        <div class="input_flex">
                            <label for="password">Mot de passe</label>
                            <input type="password" id="password" name="password" placeholder="Mot de passe" class="<?= isset($errorMsgInscription['mdp']) ? "wrong" : "" ?><?= isset($successMsgInscription['mdp']) ? "good" : "" ?>" value="<?= isset($_POST['password']) ? htmlspecialchars($_POST['password']) : "" ?>" required>
                            <span id="error_password"><?= isset($errorMsgInscription['mdp']) ? $errorMsgInscription['mdp'] : "" ?></span>
                        </div>

                        <div class="input_flex">
                            <label for="confirm_password">Confirmation mot de passe</label>
                            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmation du mot de passe" class="<?= isset($errorMsgInscription['confirm_mdp']) ? "wrong" : "" ?><?= isset($successMsgInscription['confirm_mdp']) ? "good" : "" ?>" value="<?= isset($_POST['confirm_password']) ? htmlspecialchars($confirm_mdp) : "" ?>" required>
                            <span id="error_confirm_password"><?= isset($errorMsgInscription['confirm_mdp']) ? $errorMsgInscription['confirm_mdp'] : "" ?></span>
                        </div>
                    </div>
                </div>

                <div id="btn_form_inscription">
                    <button type="submit" name="inscription">S'incrire</button>
                </div>
            </form>
        </main>

        <footer>
            <p>Déjà inscrit ?</p>
            <a href="connexion.php">Je me connecte !</a>
        </footer>

        <aside id="img_left_inscription"></aside>
        <aside id="img_right_inscription"></aside>
    </div>

    <script src="../assets/js/inscritption-script.js"></script>
</body>

</html>