let fermerSidebar = document.getElementById('fermerSidebar');
let navbar = document.getElementById('nav');
let showMenu = document.getElementById('showMenu')

fermerSidebar.addEventListener('click', ()=>{
    console.log('fermerSidebarClick');

    showMenu.style.display = "block"
    navbar.style.display = "none";
});

showMenu.addEventListener('click', ()=>{
    console.log('showMenuClick');

    navbar.style.display = "flex";
    showMenu.style.display = "none"
});