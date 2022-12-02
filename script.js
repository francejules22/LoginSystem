
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const accountContainer = document.getElementById('account-container');


signUpButton.addEventListener('click', () => {
     accountContainer.classList.add("right-panel-active")
})

signInButton.addEventListener('click', () => {
    accountContainer.classList.remove("right-panel-active")
})