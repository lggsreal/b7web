function inserirPost(){
let posts = document.querySelector(".posts");
posts.innerHTML = "Carregando..."

fetch('https://jsonplaceholder.typicode.com/posts', {
  method: 'GET'
})
.then((resolveOne) => {
  return resolveOne.json();
})
.then((resolveTwo) => {
  return resolveTwo[1].title;
})
.then((resolveThree) => {
  posts.innerHTML = resolveThree;
})
.catch((err) => {
  posts.innerHTML = err;
})
}