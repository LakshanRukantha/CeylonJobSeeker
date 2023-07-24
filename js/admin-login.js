var googleBtn = document.querySelector('.google-btn');
googleBtn.addEventListener('click', function() {
    // Redirect the user to the Google sign-in page
    window.location.href = 'https://accounts.google.com/';
});

var inputs = document.querySelectorAll(".input");

function addcl() {
    var parent = this.parentNode.parentNode;
    parent.classList.add("focus");
}

function remcl() {
    var parent = this.parentNode.parentNode;
    if (this.value == "") {
        parent.classList.remove("focus");
    }
}

// Adding event listeners to input fields
inputs.forEach(function(input) {
    input.addEventListener("focus", addcl);
    input.addEventListener("blur", remcl);
});
