var email = document.getElementById("email"),
    psw = document.getElementById("psw"),
    Cpsw = document.getElementById("Cpsw"),
    Nom = document.getElementById("Nom"),
    prenom = document.getElementById("prenom"),
    age = document.getElementById("age"),
    Tel = document.getElementById("Tel"),
    adr = document.getElementById("adr"),
    wilaya = document.getElementById("wilaya"),
    sex = document.getElementsByName("sex");

var pemail = document.getElementById("pemail"),
    ppsw = document.getElementById("ppsw"),
    pNom = document.getElementById("pNom"),
    pAge = document.getElementById("pAge"),
    pprenom = document.getElementById("pprenom"),
    pTel = document.getElementById("pTel"),
    pAdr = document.getElementById("pAdr"),
    pCpsw = document.getElementById("pCpsw");

var form = document.getElementById("form");

const ValidateForm = () =>{
    var gender;
    var tele = Tel.value;
    if(Nom.value === ''){
        pNom.innerText = 'please, write your Name*';
        return false;
    } 
    if(prenom.value === ''){
        pprenom.innerText = 'please, write your lastName*';
        return false;
    } 
    if(age.value === ''){
        pAge.innerText = 'please, write your Age*';
        return false;
    }
    if(isNaN(age.value)){
        pAge.innerText = 'please, write a number*';
        return false;
    }
    if(age.value < 18 || age.value > 80){
        pAge.innerText = 'Sorry, the Age must be between 18 and 80';
        return false;
    } 
    if(tele === ''){
        pTel.innerText = 'please, write your phone number*';
        return false;
    } 
    if(isNaN(tele)){
        pTel.innerText = 'the phone number must contain numbers only*';
        return false;
    }
    if(tele.length < 10){
        pTel.innerText = 'please, the phone number must contain 10 numbers*';
        return false;
    }
    if(adr.value === ''){
        pAdr.innerText = 'please, write your Adress*';
        return false;
    }
    if(email.value === ''){
        pemail.innerText = 'please, write your email*';
        return false;
    } 
    if(psw.value === ''){
        ppsw.innerText = 'please, write your password*';
        return false;
    }
    if(Cpsw.value === ''){
        pCpsw.innerText = 'please, write your password*';
        return false;
    }
    if(Cpsw.value != psw.value ){
        pCpsw.innerText = 'please, check your password*';
        return false;
    }

    for(let i = 0; i< sex.length; i++){
        if(sex[i].checked){
            gender = sex[i].value;
        }
    }

    if(confirm('your gender is : ' + gender + " and your wilaya : " + wilaya.value) == false){
        return false;
    }
    return true;
};

form.onsubmit = function(){
    return ValidateForm();
}

