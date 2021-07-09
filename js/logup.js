var username = document.getElementById('username');
var password = document.getElementById('password');
var msg = document.getElementById('msg');

function logvalidate(){

    if (username.value === '' || password.value === ''){
        msg.innerHTML = 'please give all credintials'
        msg.style.background = 'red'
    }
    else{
        return true
    }


}