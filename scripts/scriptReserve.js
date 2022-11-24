console.log('Hello There !!');

let fermer = document.getElementById('fermer');
let creerArticle = document.getElementById('creerArticle');

fermer.addEventListener('click',()=>{
    console.log('fermerClick');

    popup.style.display = 'none';
});

creerArticle.addEventListener('click', ()=>{
    console.log('test');

    popup.style.display = 'block';
})