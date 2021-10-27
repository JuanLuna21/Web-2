"use strict";
document.addEventListener("DOMContentLoaded", function () {

document.querySelector('#formulario').addEventListener('submit', function(e){
    e.preventDefault();
    const data = new URLSearchParams(new FormData(this));
    
    fetch('datos.php', {
        method: 'post',
        body: data,
    })
    .then(r=> r.text())
    .then(html =>{
        document.querySelector('#container').innerHTML = html;
    })
    .catch(error=> console.log(error));
    })
});


