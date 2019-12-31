M.AutoInit();

window.addEventListener('load', inicializar);

function inicializar(){
    let formulario = document.forms['CadastroAdmin'];
    formulario.NomeAdmin.addEventListener("blur", ValidarNome);
    formulario.sobreNome.addEventListener("blur", ValidarSB);
    formulario.Senha.addEventListener("blur", ValidarSenha);
    formulario.email.addEventListener("blur", ValidarEmail);
    

    formulario.addEventListener("submit", ValidarForm);
}

function ValidarNome() {
    let campo = document.forms['CadastroAdmin'].NomeAdmin;
    let expressao = /^\([A-Z]{1}\)\([a-z]{3,15}\)$/;
    return validar(campo, expressao);

}

function ValidarSB() {
    let campo = document.forms['CadastroAdmin'].sobreNome;
    let expressao = /^\([A-Z]{1}\)\([a-z]{3,15}\)$/;
    return validar(campo, expressao);

}

function ValidarSenha() {
    let campo = document.forms['CadastroAdmin'].Senha;
    let expressao = /^\([A-Za-z0-9]{1}\([A-Za-z0-9]{7,14}\)$/;
    return validar(campo, expressao);

}

function ValidarEmail() {
    let campo = document.forms['CadastroAdmin'].email;
    let expressao = /^\([A-Za-z0-9]{1}\([A-Za-z0-9]{7,14}\)$/;
    return validar(campo, expressao);

}

function validar(campo, expressao) {
    let valor = campo.value;

    if (expressao.test(valor)) {
        campo.style.border = "2px solid blue";
        return true;
    } else {
        campo.style.border = "2px solid red";
        return false;
    }
}

function ValidarForm(evento){
    if (ValidarNome() == false) {
        evento.preventDefault();
    }

    if (ValidarSB() == false) {
        evento.preventDefault();
    }

    if (ValidarSenha() == false) {
        evento.preventDefault();
    }

    if (ValidarEmail() == false) {
        evento.preventDefault();
    }
}