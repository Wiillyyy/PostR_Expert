function myFunction() {
    var x = document.getElementById("formContent");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
}
