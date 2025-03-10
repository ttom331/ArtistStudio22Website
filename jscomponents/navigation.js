let menu = document.querySelector('#ham-menu');
let navlist = document.querySelector('.nav-links');
menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
}