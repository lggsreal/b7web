const form = document.querySelector("#form");
const nameInput = document.querySelector("#name");
const emailInput = document.querySelector("#email");
const passwordInput = document.querySelector("#password");
const jobSelect = document.querySelector("#job");
const option = document.querySelector('#notAOption');
const messageTextArea = document.querySelector("#message");

function validacao(event){
    event.preventDefault();

    //Verifica se o nome está vazio;
    if(nameInput.value == ""){
        alert("Por favor, preencha o seu nome!");
        return;
    }

    if(emailInput.value == "" || !isEmailValid(emailInput.value)){
        alert("Por favor, preencha o seu E-mail!");
        return;
    }

    if(passwordInput.value.length < 8 || passwordInput.value.length > 9){
        alert('Por favor! Insira 8 caracteres');
        return
    }

    if(jobSelect.value == ""){
        alert('Por favor! Selecione uma opção.');
        return
    }

    if(messageTextArea.value = ""){
        alert("Preencha o campo de texto.");
        return;
    }

    form.submit();
}

//Função que valida o email:
function isEmailValid(){
    const emailRegex = new RegExp(
        /^[a-zA-Z0-9._-]+@+[a-zA-Z0-9._-]+\.+[a-zA-Z]{2,}$/
    )

    if(emailRegex.test(email)){
        return true;
    }

    return false;
}



form.addEventListener('submit', validacao);