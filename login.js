var email = document.getElementById("email"),
    psw = document.getElementById("psw");

var pemail = document.getElementById("pemail"),
    ppsw = document.getElementById("ppsw");

var form = document.getElementById("form");

const ValidateForm = () =>{
    
    if(psw.value === '' && email.value === ''){
        pemail.innerText = 'please, write your email*';
        ppsw.innerText = 'please, write your password*';
        return false;
    } else 
    if(!(psw.value === '') && email.value === ''){
        ppsw.innerHTML = '';
        pemail.innerText = 'please, write your email*';
        return false;
    } else
    if(psw.value === '' && !(email.value === '')){
        pemail.innerHTML = '';
        ppsw.innerText = 'please, write your password*';
        return false;
    } 
    return true;
};

form.onsubmit = function(){
    return ValidateForm();
}

