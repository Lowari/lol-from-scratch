<?php

$errorMsgInscription = [];
$successMsgInscription = [];
$regexSymbole = "/[?!><$]/i";

if (isset($_POST['inscription'])) {

    if (isset($_POST['name'])) {
        $name = $_POST['name'];

        if (empty($name)) {
            $errorMsgInscription['name'] = "Le champs est vide";
        }
        if (preg_match($regexSymbole, $name)) {
            $errorMsgInscription['name'] = "Les symboles sont interdits";
        }
        if (!empty($name) && !preg_match($regexSymbole, $name)) {
            $successMsgInscription['name'] = htmlspecialchars($name);
        }
    }

    if (isset($_POST['first_name'])) {
        $firstname = $_POST['first_name'];

        if (empty($firstname)) {
            $errorMsgInscription['firstname'] = "Le champ est vide";
        }
        if (preg_match($regexSymbole, $firstname)) {
            $errorMsgInscription['firstname'] = "Les symboles sont interdits";
        }
        if (!empty($firstname) && !preg_match($regexSymbole, $firstname)) {
            $successMsgInscription['firstname'] = htmlspecialchars($firstname);
        }
    }

    if (isset($_POST['pseudo'])) {
        $pseudo = $_POST['pseudo'];

        if (empty($pseudo)) {
            $errorMsgInscription['pseudo'] = "Le champ est vide";
        }
        if (preg_match($regexSymbole, $pseudo)) {
            $errorMsgInscription['pseudo'] = "Les symboles sont interdits";
        }
        if (!empty($pseudo) && !preg_match($regexSymbole, $pseudo)) {
            $successMsgInscription['pseudo'] = htmlspecialchars($pseudo);
        }
    }

    if (isset($_POST['email'])) {
        $email = $_POST['email'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMsgInscription['email'] = "L'adresse n'est pas correct";
        }
        if (empty($email)) {
            $errorMsgInscription['email'] = "Le champ est vide";
        }
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $successMsgInscription['email'] = htmlspecialchars($email);
        }
    }

    if (isset($_POST['password'])) {
        $mdp = $_POST['password'];

        if (empty($mdp)) {
            $errorMsgInscription['mdp'] = "Le champs est vide";
        }
        if (preg_match($regexSymbole, $mdp)) {
            $errorMsgInscription['mdp'] = "Les symboles sont interdits";
        }
    }

    if (isset($_POST['confirm_password'])) {
        $confirm_mdp = $_POST['confirm_password'];

        if (empty($confirm_mdp)) {
            $errorMsgInscription['confirm_mdp'] = "Le champs est vide";
        }
        if (preg_match($regexSymbole, $confirm_mdp)) {
            $errorMsgInscription['confirm_mdp'] = "Les symboles sont interdits";
        }
    }

    if (isset($mdp) && isset($confirm_mdp)) {
        if ($mdp != $confirm_mdp) {
            $errorMsgInscription['mdp'] = "Les mots de passe ne sont pas identiques";
            $errorMsgInscription['confirm_mdp'] = "Les mots mots de passe ne sont pas identiques";
        }
        if ($mdp === $confirm_mdp && !empty($mdp) && !empty($confirm_mdp)) {
            $successMsgInscription['mdp'] = htmlspecialchars($mdp);
            $successMsgInscription['confirm_mdp'] = htmlspecialchars($confirm_mdp);
        }
    }
}
