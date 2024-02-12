let button_login = document.getElementById('button-login');
let button_register = document.getElementById('button-register');
let login = document.getElementById('login');
let register = document.getElementById('register');

// console.log(login)
button_login.addEventListener('click',function(){
    login.style.display = 'block';
    register.style.display = 'none';
    button_login.classList.add('buttons')
    button_register.classList.remove('buttons')
    // alert('pke')
})
button_register.addEventListener('click',function(){
    login.style.display = 'none';
    register.style.display = 'block';
    button_login.classList.remove('buttons')
    button_register.classList.add('buttons')
    // alert('pke')
})