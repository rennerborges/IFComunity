 M.AutoInit();

window.addEventListener('load', inicializar);


function inicializar(){
    let formulario = document.forms['CadastroAlun'];
    formulario.NomeAlun.addEventListener("blur", ValidarNome);
    formulario.sobreNome.addEventListener("blur", ValidarSB);
    formulario.Senha.addEventListener("blur", ValidarSenha);


    formulario.addEventListener("submit", ValidarForm);
}

function ValidarNome() {
    let campo = document.forms['CadastroAlun'].NomeAlun;
    let expressao = /^\([A-Z]{1}\)\([a-z]{3,15}\)$/;
    return validar(campo, expressao);

}

function ValidarSB() {
    let campo = document.forms['CadastroAlun'].sobreNome;
    let expressao = /^\([A-Z]{1}\)\([a-z]{3,15}\)$/;
    return validar(campo, expressao);

}

function ValidarSenha() {
    let campo = document.forms['CadastroAlun'].Senha;
    let expressao = /^\([A-Za-z0-9]{1}\([A-Za-z0-9]{7,14}\)$/;
    return validar(campo, expressao);

}

function validarRadio1() {
  let radio = document.forms['CadastroAlun'].group1;
   for (var i = radio.length + 1; i >= 0; i++) {
   
   
   if (radio[i].checked == false) {
    alert('Por favor, selecione o Tipo de Endereço.');
    return false;
      }
    }
    return true;
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




}