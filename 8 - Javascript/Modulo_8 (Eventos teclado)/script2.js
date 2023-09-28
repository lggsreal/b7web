function addList(){
    const input = document.querySelector('.textInput');
    const value = input.value;
    const ul = document.querySelector('ul');
    const li = document.createElement('li');
    li.innerHTML = value;
    ul.appendChild(li);

    input.value = "";
}

function removeList(){
    const ul = document.querySelector('ul');
    const li = document.querySelector('li');
    ul.removeChild(li); 
        
} 

function keyUp(e){
    const input = document.querySelector('.textInput');
    const value = input.value;
    const ul = document.querySelector('ul');

    if(e.key == "Enter"){
        const newLI = document.createElement('li');
        newLI.innerHTML = value;
        ul.appendChild(newLI);
    }
}