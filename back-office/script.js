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
let error1 = document.querySelector('#errormessage')
let error2 = document.querySelector('#errormessage2')
let error3 = document.querySelector('#errormessage3')
let error4 = document.querySelector('#errormessage4')
let error5 = document.querySelector('#errormessage5')
let main = document.querySelector('main')
res = document.getElementById('done')
let validate = document.querySelector('#validate')
const form = document.querySelector('form')
form.addEventListener('validate', function(e) {
    e.preventDefault()
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
    function isName(first){
        let regex1 = /^[A-Za-z][A-Za-z]+$/;
        return regex1.test(first)
    }
    function isName(second){
        let regex1 = /^[A-Za-z][A-Za-z]+$/;
        return regex1.test(second)
    }
    function isName(third){
        let regex1 = /^[A-Za-z][A-Za-z]+$/;
        return regex1.test(third)
    } 
    
    console.log(isEmail(fields.first));
    console.log(isName(fields.second));
    console.log(isSubject(fields.third));
    if (isNotEmpty(fields.text1) && isNotEmpty(fields.text2) && isNotEmpty(fields.text3) && isNotEmpty(fields.text4)) {
        if (isEmail(fields.text2) && isName(fields.text1) && isSubject(fields.text3) && isMessage(fields.text4)) {
             const formData = new FormData(form);
            fetch('./PHP/index.php', {
            method: 'POST',
            body: formData
            })
            .then((response) => {
            return response.json()
            }) 
            .then((data) => {
            console.log(data);
            res.style.display = 'flex'
            cotelette.classList.add('qqch')
            toto.style.display = 'none'
            tutu.style.display = 'none'
            titi.style.display = 'none'
            tata.style.display = 'none'
             
        })
    }
    else {
        console.log('toto')
    }
        }
        else{
            console.log('tutu')
        }
    })
     /* NOT EMPTY */
    
       function isNotEmpty(value) {
        if (value == null || typeof value == 'undefined' ) return false;
        return (value.length >= 2);
       }
    
       bye.addEventListener('click', function () {
           console.log('tumtum');
            form.reset()
            res.style.display = 'none'
            cotelette.classList.remove('qqch')
       })