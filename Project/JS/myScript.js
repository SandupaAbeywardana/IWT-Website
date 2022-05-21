function chechPassword() {
    const password = document.querySelector('input[name=psw]');
    const confirm = document.querySelector('input[name=cpsw]');
    if (confirm.value === password.value) {
    confirm.setCustomValidity('');
    } 
    else {
    confirm.setCustomValidity('Passwords do not match');
    }
}