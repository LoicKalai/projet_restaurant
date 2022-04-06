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
// let toto = document.querySelector('#spanResult')
// let tata = document.querySelector('#spanResult2')
// let tutu = document.querySelector('#spanResult3')
// let titi = document.querySelector('#spanResult4')
let main = document.querySelector('main')
res = document.getElementById('done')
let validate = document.querySelector('#validate')
const form = document.querySelector('form')
form.addEventListener('submit', function(e) {
    e.preventDefault()
    let fields = {}
    fields.text1 = document.querySelector('.text1').value;
    fields.text2 = document.querySelector('.text2').value;
    fields.text3 = document.querySelector('.text3').value;
    fields.text4 = document.querySelector('.text4').value;
    if (fields.text1 == "") {
        toto.innerHTML = 'Mettez entre 2 et 15 caractères'
        toto.style.display = 'flex'
    }
    if (fields.text2 == "") {
        tata.innerHTML = 'Mettez un e-mail valide en format blabla@service.domaine'
        tata.style.display = 'flex'
    }
    if (fields.text3 == "") {
        tutu.innerHTML = 'Mettez entre 2 et 15 caractères'
        tutu.style.display = 'flex'
    }
    if (fields.text4 == "") {
        titi.innerHTML = 'Mettez entre 10 et 20 caractères'
        titi.style.display = 'flex'
    }
    function isEmail(text2) {
        let regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
        return regex.test(String(text2).toLowerCase());
       }
    function isName(text1){
        let regex1 = /^[A-Za-z][A-Za-z]+$/;
        return regex1.test(text1)
    }   
    function isSubject(text3){
        let regex2 = /^[A-Za-z][A-Za-z]+$/;
        return regex2.test(text3);
    }
    function isMessage(text4){
        let regex3 = /^[A-Za-z][A-Za-z]+$/;
        return regex3.test(text4);
    }
    console.log(isEmail(fields.text2));
    console.log(isName(fields.text1));
    console.log(isSubject(fields.text3));
    console.log(isMessage(fields.text4));
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