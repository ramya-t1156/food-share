function togglePassword(inputId) {
    const passwordInput = document.getElementById(inputId);
    const icon = passwordInput.nextElementSibling.nextElementSibling;

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        icon.classList.remove('uil-eye-slash');
        icon.classList.add('uil-eye');
    } else {
        passwordInput.type = 'password';
        icon.classList.remove('uil-eye');
        icon.classList.add('uil-eye-slash');
    }
}

function handleCheckbox() {
    const checkbox = document.getElementById('terms-checkbox');
    const signupButton = document.getElementById('signup-button');

    if (checkbox.checked) {
        signupButton.disabled = false;
    } else {
        signupButton.disabled = true;
    }
}
