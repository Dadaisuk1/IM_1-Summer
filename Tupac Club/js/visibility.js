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
    var passwordInput = document.getElementById(id);
    var passIcon = document.getElementById(id === 'password' ? 'pass_icon' : 'confirm_pass_icon');

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passIcon.textContent = "visibility";
    } else {
        passwordInput.type = "password";
        passIcon.textContent = "visibility_off";
    }
}
