document.addEventListener('DOMContentLoaded', function() {

    const loginForm = document.getElementById('login');
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');

    loginForm.addEventListener('submit', (e) => {
        e.preventDefault();
        if (usernameInput.value === '' || passwordInput.value === '') {
            alert('Please fill in all required fields');
        } else {
            loginForm.submit();
        }
    });

});

function togglePasswordVisibility(id) {
    const passwordField = document.getElementById(id);
    const icon = document.getElementById('pass_icon');
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        icon.textContent = 'visibility';
    } else {
        passwordField.type = 'password';
        icon.textContent = 'visibility_off';
    }
}
