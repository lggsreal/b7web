function change(){
    if(document.querySelector('.change').classList.contains('black')){
        document.querySelector('.change').classList.remove('black');
        document.querySelector('.change').classList.add('red');
    }

    else if(document.querySelector('.change').classList.contains('red')){
        document.querySelector('.change').classList.remove('red');
        document.querySelector('.change').classList.add('black');
    }
}