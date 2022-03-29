let plat = document.querySelector('.plat')
let btnplat = document.getElementById('btnplat')

let entree = document.querySelector('.entree')
let btnentree = document.getElementById('btnentré')

let dessert = document.querySelector('.dessert')
let btnedessert = document.getElementById('btndessert')

let boisson = document.querySelector('.boisson')
let btnboiss = document.getElementById('btnboiss')


window.addEventListener('load', function(){
    entree.style.display="block";
    dessert.style.display="none";
    boisson.style.display="none";
    plat.style.display="none";
    


})

 btnplat.addEventListener('click', function(){
    plat.style.display="block";
    entree.style.display="none";
    dessert.style.display="none";
    boisson.style.display="none";
    
 })
    
btnentree.addEventListener('click', function(){
    entree.style.display="block";
    plat.style.display="none";
    dessert.style.display="none";
    boisson.style.display="none";
   
    

})

btnedessert.addEventListener('click', function(){
    dessert.style.display="block";
    entree.style.display="none";
    plat.style.display="none";
    boisson.style.display="none";
    
})
btnboiss.addEventListener('click', function(){
    boisson.style.display="block";
    entree.style.display="none";
    plat.style.display="none";
    dessert.style.display="none";
    
})

