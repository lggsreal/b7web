let value = Math.floor(Math.random() * 100);
console.log(value);

function generate(){
    let span = document.querySelector('span');
    let input = document.querySelector('.text');
    let value = input.value;
    parseInt(value);

    let valueGenerate = Math.floor(Math.random() * value);
    span.textContent = valueGenerate;
}