let slideIndex = 0;
let slides = document.getElementsByClassName("slide");

function mostrarSlides(){

for(let i = 0; i < slides.length; i++){
slides[i].style.display = "none";
}

slideIndex++;

if(slideIndex > slides.length){
slideIndex = 1;
}

slides[slideIndex - 1].style.display = "block";

setTimeout(mostrarSlides, 3000);

}

mostrarSlides();

function validarFormulario(event) {

    const form = event.target;
    const nome = form.querySelector('input[name="nome"]').value.trim();
    const email = form.querySelector('input[name="email"]').value.trim();
    const telefone = form.querySelector('input[name="telefone"]').value.trim();
    const endereco = form.querySelector('input[name="endereco"]').value.trim();

    if (nome.split(' ').filter(part => part !== "").length < 2) {

        alert("Por favor, insira seu nome completo (Nome e Sobrenome).");
        event.preventDefault();
        return false;

    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {

        alert("Por favor, insira um e-mail válido.");
        event.preventDefault();
        return false;

    }

    if (telefone === "") {

        alert("Por favor, insira um número de telefone.");
        event.preventDefault();
        return false;

    } else {

        const apenasNumeros = telefone.replace(/\D/g, '');

        if (apenasNumeros.length < 10 || apenasNumeros.length > 11) {
            
            alert("Por favor, insira um telefone válido com DDD (Ex: 11999998888).");
            event.preventDefault();
            return false;

        }

    }

    if (endereco.length < 5) {

        alert("Por favor, insira um endereço válido (Cidade, Bairro ou Rua).");
        event.preventDefault();
        return false;

    }

}
