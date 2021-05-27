var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
    loop: true
});



typewriter.typeString('Bienvenue !')
    .pauseFor(2500)
    .deleteAll()
    .start();
    .stop()