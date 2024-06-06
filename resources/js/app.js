import './bootstrap';

let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

document.getElementById('btnEnviar').addEventListener('click', function() {
    var nome = document.getElementById('nome').value;
    var telefone = document.getElementById('telefone').value;
    var endereco = document.getElementById('endereco').value;
    var sexo = document.getElementById('sexo').value;
    var mensagem = document.getElementById('mensagem').value;

    var resultado = "Nome: " + nome + "<br>" +
                    "Telefone: " + telefone + "<br>" +
                    "Endereço: " + endereco + "<br>" +
                    "Sexo: " + sexo + "<br>" +
                    "Mensagem: " + mensagem;

    document.getElementById('resultado').innerHTML = resultado;
});