//MENU RESPONSIVO
var mobileIcon = document.querySelector('.menuMobileIcon');
mobileIcon.addEventListener('click', ()=>{
    let menuMobile = document.querySelector('.menuMobile');
    let iconMenu = document.querySelector('.icon_menu');

    if(menuMobile.classList.contains('hidden')){
        menuMobile.classList.remove('hidden');
        menuMobile.classList.add('active');
        iconMenu.setAttribute('src', 'script/close.png');
    }
    else if(menuMobile.classList.contains('active')){
        menuMobile.classList.remove('active');
        menuMobile.classList.add('hidden');
        iconMenu.setAttribute('src', 'script/menu.png');
    }
});

