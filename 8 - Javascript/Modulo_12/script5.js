function enviar(){
    let arquivo = document.getElementById("arquivo").files[0];

    fetch('https://www.meusite.com.br', {
        method: 'POST',
        body: JSON.stringify({
            title: 'Título teste',
            body: 'Corpo de teste'
        })
    })

}