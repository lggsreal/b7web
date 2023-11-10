let menuMobile = document.querySelector('.menuMobile');
let img = document.querySelector('.icon_menu_responsive')
function openMenu() {
    if(menuMobile.classList.contains('hidden')){
        menuMobile.classList.remove('hidden');
        menuMobile.classList.add('active');
        img.setAttribute('src', 'script/close_icon.png'); 
    }
    else if(menuMobile.classList.contains('active')){
        menuMobile.classList.remove('active');
        menuMobile.classList.add('hidden');
        img.setAttribute('src', 'script/menu_icon.png');
          
    }
}


