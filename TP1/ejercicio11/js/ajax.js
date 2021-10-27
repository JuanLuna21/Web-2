"use strict";
document.querySelector("#test").addEventListener('click', function(e) {
    e.preventDefault();

    fetch('http://localhost/practice/TP1/ejercicio11/ejercicio11.php')
    .then(response => response.text()) // el servidor nos devuelve HTML
    .then(html => {
        document.querySelector('#container').innerHTML = html;
    })
    .catch(error => console.log(error));
});