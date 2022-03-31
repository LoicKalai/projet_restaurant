let entr = document.querySelector('#entr')
let bois = document.querySelector('#bois')
let plat = document.querySelector('#plat')
let dess = document.querySelector('#dess')

let boxEntree = document.querySelector('.boxEntree')
let boxPlats = document.querySelector('.boxPlats')
let boxDesserts = document.querySelector('.boxDesserts')
let boxBoissons = document.querySelector('.boxBoissons')



window.addEventListener('load', function(){
    boxPlats.style.display="none";
    boxDesserts.style.display="none";
    boxEntree.style.display="flex";
    boxBoissons.style.display="none";
    console.log('cadavre');


})

 plat.addEventListener('click', function(){
    boxPlats.style.display="flex";
    boxDesserts.style.display="none";
    boxEntree.style.display="none";
    boxBoissons.style.display="none";
    console.log('tata');
 })

entr.addEventListener('click', function(){
    boxEntree .style.display="flex";
    boxDesserts.style.display="none";
    boxBoissons.style.display="none";
    boxPlats.style.display="none";
    console.log('toto');

})

dess.addEventListener('click', function(){
    boxDesserts.style.display="flex";
    boxBoissons.style.display="none";
    boxEntree.style.display="none";
    boxPlats.style.display="none";
    console.log('tutu');
})
bois.addEventListener('click', function(){
    boxBoissons.style.display="flex";
    boxDesserts.style.display="none";
    boxEntree.style.display="none";
    boxPlats.style.display="none";
    console.log('tyty');
})