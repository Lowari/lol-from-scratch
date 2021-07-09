// Ajout autmatique de la class currentPage

const links = document.getElementsByTagName('a');

for (i = 0; i < links.length; i++) {
    link = links[i];
    if (link.href.match(document.location.href)) {
        this.link.classList.add('currentPage');
    }
}

// Page connexion 

const mail_connexion = document.getElementById('email_connexion');
const error_mail_connexion = document.getElementById('error_mail_connexion');
const password_connexion = document.getElementById('password_connexion');
const error_password_connexion = document.getElementById('error_password_connexion');

/**
 * Vérifie une fois que l'input a perdu le focus si le champ est vide
 * @param {HTMLElemennt} input input target 
 * @param {HTMLElement} element element où inscrire le message
 */

function check_empty_input(input, element) {
    input.addEventListener('focusout', (e) => {
        if (e.target.value == '') {
            element.innerText = "le champ est vide";
            input.classList.add('wrong');
        } else {
            element.innerText = "";
            input.classList.remove('wrong');
        }
    })
}

check_empty_input(mail_connexion, error_mail_connexion);
check_empty_input(password_connexion, error_password_connexion);
