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
    


})

 plat.addEventListener('click', function(){
    boxPlats.style.display="flex";
    boxDesserts.style.display="none";
    boxEntree.style.display="none";
    boxBoissons.style.display="none";
   
 })

entr.addEventListener('click', function(){
    boxEntree .style.display="flex";
    boxDesserts.style.display="none";
    boxBoissons.style.display="none";
    boxPlats.style.display="none";
    

})

dess.addEventListener('click', function(){
    boxDesserts.style.display="flex";
    boxBoissons.style.display="none";
    boxEntree.style.display="none";
    boxPlats.style.display="none";
   
})
bois.addEventListener('click', function(){
    boxBoissons.style.display="flex";
    boxDesserts.style.display="none";
    boxEntree.style.display="none";
    boxPlats.style.display="none";
    
})

console.log();


                                                // FORM AND BUTTONS



let error1 = document.querySelector('#errormessage1')
let error2 = document.querySelector('#errormessage2')
let error3 = document.querySelector('#errormessage3')
let error4 = document.querySelector('#errormessage4')
let error5 = document.querySelector('#errormessage5')
let main = document.querySelector('main')
let res = document.getElementById('done')
let validate = document.querySelector('#validate')
const form = document.querySelector('form')
let ok = document.getElementById('ok')

function isNotEmpty(value) {
    if (value == null || typeof value == 'undefined' ) return false;
    return (value.length >= 2);
   }

form.addEventListener('submit', function(event) {
    event.preventDefault()
    let inputinfo = {}
    inputinfo.first = document.querySelector('#name').value;
    inputinfo.second = document.querySelector('#description').value;
    inputinfo.third = document.querySelector('#price').value;
    inputinfo.fourth = document.querySelector('#inputGroupFile04').value;
    inputinfo.fifth = document.querySelector('#foodclass').value

    

    if (inputinfo.first == "") {
        error1.innerHTML = 'Mettez plus que 5 caractères'
        error1.style.display = 'flex'
    }
    if (inputinfo.second == "") {
        error2.innerHTML = 'Mettez plus que 5 caractères'
        error2.style.display = 'flex'
    }
    if (inputinfo.third == "") {
        error3.innerHTML = 'Mettez le prix'
        error3.style.display = 'flex'
    }
    if (inputinfo.fourth == "") {
        error4.innerHTML = 'Mettez une image'
        error4.style.display = 'flex'
    }
    if (inputinfo.fifth == "") {
        error5.innerHTML = 'Choisissez une categorie'
        error5.style.display = 'flex'
    }
    function isName(){
        let regex1 = /^[A-Za-z][A-Za-z]+$/;
        return regex1.test()
    }
    
   
    console.log(isName(inputinfo.first));
    
    if (isNotEmpty(inputinfo.first) && isNotEmpty(inputinfo.second) && isNotEmpty(inputinfo.third)) {
        if (isName(inputinfo.first) && isName(inputinfo.second) && isName(inputinfo.third)) {
             const formData = new FormData(form);
            fetch('./verify.php', {
            method: 'POST',
            body: formData
            })
            .then((response) => {
            return response.json()
            }) 
            .then((data) => {
            console.log(data);
            res.style.display = 'flex'
            main.classList.add('qqch')
            error1.style.display = 'none'
            error2.style.display = 'none'
            error3.style.display = 'none'
            error4.style.display = 'none'
            error5.style.display = 'none'
             
        })
    }
    else {
        
    }
        }
        else{
            
        }
    })
     /* NOT EMPTY */
    
       function isNotEmpty(value) {
        if (value == null || typeof value == 'undefined' ) return false;
        return (value.length >= 2);
       }
    
       ok.addEventListener('click', function () {
           console.log('Well done');
            form.reset()
            res.style.display = 'none'
            main.classList.remove('qqch')
       })