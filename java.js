var app = document.getElementById('app'); // script qui normalement affiche un texte animé, écriture, suppression (si curieux voir sur mon site willydev.xzy) mais 
var typewriter = new Typewriter(app, {  // pour une raison qui m'échappe n'a jamais fonctionné sur les serveurs de l'iut
    loop: true
});



typewriter.typeString('Bienvenue !')
    .pauseFor(2500)
    .deleteAll()
    .yeay()