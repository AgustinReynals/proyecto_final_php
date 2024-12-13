document.getElementById('myForm').addEventListener('submit',function(event){
    let email = document.getElementById('email-login').value;
    let errorEmail = document.getElementById('errorEmail-login');
    let password = document.getElementById('password-login').value;
    let errorPassword = document.getElementById('errorPassword-login');
    let formValid = true;
    
    if (!email){
        event.preventDefault()
        errorEmail.style.display= 'inline';
        formValid = false;
    } else{
        errorEmail.style.display= 'none';
    }

    if (!password){
        event.preventDefault()
        errorPassword.style.display= 'inline';
        formValid = false;
    } else{
        errorPassword.style.display= 'none';
    }

    if (!formValid) {
        event.preventDefault()
    }
 })