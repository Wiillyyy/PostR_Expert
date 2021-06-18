function myFunction() {

    var AfficheMDP = document.getElementById('password');

    if (AfficheMDP.type === 'password') {
      AfficheMDP.type = 'text';
    } else {
      AfficheMDP.type = 'password';
    }
}

/* Simple script java qui transforme le type password en text */