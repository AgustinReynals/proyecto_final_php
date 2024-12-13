document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('myForm').addEventListener('submit', function(event) {
        let name = document.getElementById('name-register').value.trim();
        let errorName = document.getElementById('errorName-register');
        let lastName = document.getElementById('lastName-register').value.trim(); 
        let errorLastName = document.getElementById('errorLastName-register');
        let email = document.getElementById('email-register').value.trim();
        let errorEmail = document.getElementById('errorEmail-register');
        let password = document.getElementById('password-register').value.trim();
        let errorPassword = document.getElementById('errorPassword-register');
        let formValid = true;

        if (!name) {
            errorName.style.display = 'inline';
            formValid = false;
        } else {
            errorName.style.display = 'none';
        }

        if (!lastName) {
            errorLastName.style.display = 'inline';
            formValid = false;
        } else {
            errorLastName.style.display = 'none';
        }

        if (!email) {
            errorEmail.style.display = 'inline';
            formValid = false;
        } else {
            errorEmail.style.display = 'none';
        }

        if (!password) {
            errorPassword.style.display = 'inline';
            formValid = false;
        } else {
            errorPassword.style.display = 'none';
        }

        if (!formValid) {
            event.preventDefault(); 
        }
    });
});
