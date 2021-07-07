// Ajout autmatique de la class currentPage

const links = document.getElementsByTagName('a');

for (i = 0; i < links.length; i++) {
    link = links[i];
    if (link.href.match(document.location.href)) {
        this.link.classList.add('currentPage');
    }
}