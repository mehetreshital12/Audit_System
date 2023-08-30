const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
var otpButton = document.getElementById('otpBtn');

    if(signUpButton)
    {
        signUpButton.addEventListener('click', () => {
        container.classList.add('right-panel-active');
        });
    }
    
    if(signInButton)
    {
        signInButton.addEventListener('click', () => {
        container.classList.remove('right-panel-active');
        });
    }
    
function openForm(){
    document.getElementById("card-details").style.display="block";
}

function closeForm(){
    document.getElementById("card-details").style.display="none";
}

otpButton.onclick = function(){
    
}