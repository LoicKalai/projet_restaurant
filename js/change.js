<<<<<<< HEAD
//--------------------------------------------//
//             CHANGEMENT MENU               //
//                    LOÏC                  //
//-----------------------------------------//
=======
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
>>>>>>> 4a5ed4300ed672b2a39b63c43c296c1e2a0ecf05


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





//-------------------------------------//
//        Message d'erreur Moustapha  //
//                 Formulaire
//-----------------------------------//

let regleNom = /^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ' -]+$/;
let reglePrenom = /^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ' -]+$/;
let regleMail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,6}$/;
let regleMessage = /^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ',;(). -]+$/;

let nom = document.querySelector('#cf-nom')
let prenom = document.querySelector('#cf-prenom')
let mail = document.querySelector('#cf-mail')
let message = document.querySelector('#cf-message')

let btn = document.querySelector('#cf-submit')
    btn.addEventListener('click', function(){
    let resultatNom = regleNom.test(nom.value)
    let resultatPrenom = reglePrenom.test(prenom.value)
    let resultatMail = regleMail.test(mail.value)
    let resultatMessage = regleMessage.test(message.value)
if(resultatNom == false){
        document.querySelector('.errornom').style.visibility='visible'
    }
    if(resultatPrenom == false){
        document.querySelector('.errorprenom').style.visibility='visible'
    }
    if(resultatMail == false){
        document.querySelector('.errormail').style.visibility='visible'
    }
    if(resultatMessage == false){
        document.querySelector('.errormess').style.visibility='visible'
    }
    if((resultatNom == true) && (resultatPrenom == true) && (resultatMail == true) && (resultatMessage == true)) {
        document.querySelector('.errornom').style.visibility='hidden'
        document.querySelector('.errorprenom').style.visibility='hidden'
        document.querySelector('.errormail').style.visibility='hidden'
        document.querySelector('.errormess').style.visibility='hidden'
    }

})


//-----------------------------------------------------//
                    //AJAX FORMULAIRE//
                        //MOUSTAPHA//
//-----------------------------------------------------//
const form = document.querySelector('form');
form.addEventListener('submit', function(e) {
    e.preventDefault(); 

    const formData = new FormData(form); 

    fetch('./php/contact.php', { 
        method: 'POST', 
        body: formData 
    }) 
    .then((response) => {
        return response.json();
    })
    .then((data) => {
        console.log(data);
        if(data.validation == 'Email envoyé'){
            document.querySelector('.validmess').style.display='block';
            form.reset()
        };
    })

})