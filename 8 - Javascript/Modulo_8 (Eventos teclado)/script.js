function keyUp(e){
    console.log(e.ctrlKey);
}

var textArea = document.querySelector('input');
textArea.addEventListener('keyup', keyUp);
