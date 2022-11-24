console.log('Hello There !!');

let connect = document.getElementById('connecter');
let popup = document.getElementById('popup');
let mdpoublie = document.getElementById('mdpoublie');
let sinscrire = document.getElementById('sinscrire');
let fermer = document.getElementById('fermer');
let btnretour = document.getElementById('btnretour')
let btnretour1 = document.getElementById('btnretour1')

let connexion = document.getElementById('connexion');
let inscription = document.getElementById('inscription');
let motdepasseoublie = document.getElementById('motdepasseoublie');

fermer.addEventListener('click',()=>{
    console.log('fermerClick');

    popup.style.display = 'none';
    connexion.style.display = 'none';
    inscription.style.display = 'none';
    motdepasseoublie.style.display = 'none';
});

btnretour.addEventListener('click', ()=>{
    console.log("retourClick");

    popup.style.display = 'block';
    connexion.style.display = 'block';

    inscription.style.display = 'none';
    motdepasseoublie.style.display = 'none';
});

btnretour1.addEventListener('click', ()=>{
    console.log("retourClick");

    popup.style.display = 'block';
    connexion.style.display = 'block';

    inscription.style.display = 'none';
    motdepasseoublie.style.display = 'none';
});

connect.addEventListener('click', ()=>{
    console.log("connectClick");

    popup.style.display = 'block';
    connexion.style.display = 'block';

    inscription.style.display = 'none';
    motdepasseoublie.style.display = 'none';
});

mdpoublie.addEventListener('click', ()=>{
    console.log("mdpOubliéClick");

    popup.style.display = 'block';
    motdepasseoublie.style.display = "block";
    
    inscription.style.display = 'none';
    connexion.style.display = 'none';
});

sinscrire1.addEventListener('click', ()=>{
    console.log("sinscrireClick");

    popup.style.display = 'block';
    inscription.style.display = 'block';
    
    motdepasseoublie.style.display = "none";
    connexion.style.display = 'none';
});

sinscrire.addEventListener('click', ()=>{
    console.log("sinscrireClick");

    popup.style.display = 'block';
    inscription.style.display = 'block';
    
    motdepasseoublie.style.display = "none";
    connexion.style.display = 'none';
});