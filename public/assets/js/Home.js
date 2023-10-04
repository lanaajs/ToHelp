function showMenu(){
    var mobileMenu = document.getElementById('menu_mobile');
    var logo = document.getElementById('imgLogo');

    if(mobileMenu.style.display == 'flex'){
        mobileMenu.style.display = 'none';
        logo.setAttribute("src", "../../public/assets/img/menu.png");
    }else{
        mobileMenu.style.display = 'flex';
        logo.setAttribute("src", "../../public/assets/img/close.png");
    }
}