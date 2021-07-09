var username = document.getElementById('username');
var password = document.getElementById('password');
var email = document.getElementById('email');
var phone = document.getElementById('phone');
var cpassword = document.getElementById('cpassword');
var reg = document.getElementById('reg');
var msg = document.getElementById('msg')


function FormCheck() {
    // regx1 = /[4-9][0-9]{9}$/;
    if (username.value.trim() === '' || password.value.trim() === '' || email.value.trim() === '' || cpassword.value.trim() === ''){
        msg.style.background = 'red';
        msg.innerHTML = 'please fill all box';
    
}
else if (password.value.trim().length > 8 || password.value.trim().length <5){
    msg.style.background = 'red';
    msg.innerHTML = 'password length should be 6 tp 8';
    alert('password length should be 6 tp 8');
    
}
else if (phone.value.trim().length != 10){
    alert('phone should be 10 digits')

    

}
// else if (phone.value.trim().length == 10){
//     alert('phone should be 10 digits');
//     if(regx1.test(phone)){
//         return true;
//     }
//     else{
//         alert('please give number only');
//     }
    
    

// }





else{
    EmailCheck();
}


    
}
function EmailCheck() {
    if (password.value != cpassword.value){
        alert('password doesnot match');  
    }
else{
       return true;
    }
}
