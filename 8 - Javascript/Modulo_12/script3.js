fetch("https://jsonplaceholder.typicode.com/users")
    .then((resolve) => {
        return resolve.json();
    }).then((resolveTwo) => {
        document.querySelector('h1').innerHTML = "Olá! seja bem vindo(a), " + resolveTwo[3].name;
    }).catch((err) => {
        console.log(err)
    })

