// Appel de tous les élements

const name_inscritpion = document.getElementById('name');
const error_name = document.getElementById('error_message_name');
const first_name = document.getElementById('first_name');
const error_first_name = document.getElementById('error_first_name');
const pseudo = document.getElementById('pseudo');
const error_pseudo = document.getElementById('error_pseudo');
const email = document.getElementById('email');
const error_email_inscription = document.getElementById('error_email_inscription');
const password = document.getElementById('password');
const password_error = document.getElementById('error_password');
const confirm_password = document.getElementById('confirm_password');
const error_confirm_password = document.getElementById('error_confirm_password');

checkAll(name_inscritpion, error_name);
checkAll(first_name, error_first_name);
checkAll(pseudo, error_pseudo);
checkAll(password, password_error);

// Manque vérifiaction email

// email.addEventListener('focusout', (e) => {
//     check_empty_input(email, error_email_inscription);
//     if (!regexMail.test(email.value)) {
//         error_email_inscription.innerText = "Email invalide";
//         wrong(email);
//     } else if (e.target.value != "" && e.target.value.match(regexMail)) {
//         good(email);
//     }
// })

confirm_password.addEventListener('focusout', (e) => {
    if (e.target.value == "") {
        error_confirm_password.innerHTML = 'Le chammps est vide';
    } else if (e.target.value != password.value) {
        error_confirm_password.innerText = "Le mot de passe n'est pas identique";
        wrong(confirm_password);
    } else if (e.target.value != "" && e.target.value === password.value) {
        good(confirm_password);
    }
})

// Regex

const regexSymbol = /[!$%^&*()_+|~=`{}\[\]:";<>?,.\/]/;
const regexMail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

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
            wrong(input);
        } else {
            element.innerText = "";
            good(input);
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
            wrong(input);
        }
    })
}

/**
 * Vérifie que la longueur du champs est comprise entre 2 et 15 charactères
 * @param {HTMLElement} input input écouter
 * @param {HTMLElement} element element où écrire le message
 */

function check_length(input, element) {
    input.addEventListener('focusout', (e) => {
        if (e.target.value.length <= 2 && e.target.value.length != 0) {
            element.innerText = 'trop court, entre 2 et 15 charactères';
            wrong(input);
        } else if (e.target.value.length > 15) {
            element.innerText = "trop grand, entre 2 et 15 charactères";
            wrong(input);
        } else if (e.target.value.length != 0 && e.target.value.length > 2 && e.target.value.length < 15) {
            good(input);
        }
    })
}

/**
 * Ajout la class .good à l'input
 * @param {HTMLElement} input input cibler
 */

function good(input) {
    input.classList.remove('wrong');
    input.classList.add('good');
}

/**
 * Ajoute la class .wrong à l'input
 * @param {HTMLElement} input input ciblé
 */

function wrong(input) {
    input.classList.remove('good');
    input.classList.add('wrong');
}

/**
 * Incorpore les 3 fonctions à vérifier pour chaque input
 * @param {HTMLElement} input input ciblé
 * @param {HTMLElement} element endroit où écrire le message
 */

function checkAll(input, element) {
    check_empty_input(input, element);
    check_symbol(input, element);
    check_length(input, element);
}