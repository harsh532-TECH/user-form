const signUpbutton = document.getElementById('signUpbutton');
const signInbutton = document.getElementById('signInbutton');
const signInform = document.getElementById('signIn');
const signUpform = document.getElementById('signUp');

signUpbutton.addEventListener('click', function() {
    signInform.style.display = "none";
    signUpform.style.display = "block";
});

signInbutton.addEventListener('click', function() {
    signInform.style.display = "block";
    signUpform.style.display = "none";
});

