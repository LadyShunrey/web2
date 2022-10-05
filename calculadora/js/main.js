"use strict"

let form = document.querySelector("#formCalculator");
form.addEventListener('submit', enviar);

let container = document.querySelector('#container')
async function enviar(e){
    e.preventDefault();

    let method = this.method;

    let formData = new FormData(this);

    let valor1 = formData.get('valor1');
    let valor2 = formData.get('valor2');
    let operacion = formData.get('operacion');
    
    let url = operacion + '/' + valor1 + '/' + valor2;
    
    let response = await fetch(url, {
        'method' : method
    })

    let html = await response.text();

    container.innerHTML = html;
}