// Variable utile dans tous le js

const regexSymbol = /[-!$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/;

// Ajout autmatique de la class currentPage

const links = document.getElementsByTagName('a');

for (i = 0; i < links.length; i++) {
    var link = links[i];
    if (link.href.match(document.location.href)) {
        this.link.classList.add('currentPage');
    }
}

// Page connexion 

const mail_connexion = document.getElementById('email_connexion');
const error_mail_connexion = document.getElementById('error_mail_connexion');
const password_connexion = document.getElementById('password_connexion');
const error_password_connexion = document.getElementById('error_password_connexion');

check_empty_input(mail_connexion, error_mail_connexion);
check_empty_input(password_connexion, error_password_connexion);
check_symbol(mail_connexion, error_mail_connexion);

// fonction globale

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

/**
 * Vérifie si un symbole est présent dans la string
 * @param {HTMLElement} input input écouter
 * @param {HTMLElement} element element où écrire le message
 */

function check_symbol(input, element) {
    input.addEventListener('focusout', () => {
        if (input.value.match(regexSymbol)) {
            element.innerText = "Les symboles sont interdits";
        }
    })
}
