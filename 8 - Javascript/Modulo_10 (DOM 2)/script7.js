function newDate(){
    //HTML 
    let hourD = document.querySelector('.hour');
    let minuteD = document.querySelector('.minute');
    let secD = document.querySelector('.sec');

    //DATA E HORA DA MÁQUINA
    let date = new Date();
    let hourActual = date.getHours();
    let minuteActual = date.getMinutes();
    let secActual = date.getSeconds();


    //MODIFICAR O HTML E CONDIÇÃO DE TER UM ZERO NA FRENTE CASO O NUMERO SEJA MENOR QUE 10
    if(hourActual < 10){
        hourD.textContent = "0" + hourActual;
    }else{
        hourD.textContent = hourActual;
    }

    if(minuteActual < 10){
        minuteD.textContent = ": 0 " + minuteActual;
    }else{
        minuteD.textContent = ": " + minuteActual;
    }

    if(secActual < 10){
        secD.textContent = ": 0" + secActual;
    }else{
        secD.textContent = ": " + secActual;
    }
}


//CHAMAR A FUNÇÃO E FICAR ATUALIZANDO ELA CONTINUAMETE
setInterval(newDate);