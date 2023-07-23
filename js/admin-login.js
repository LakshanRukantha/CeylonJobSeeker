
document.querySelector('.google-btn').addEventListener('click', function() {
    // Redirect the user to the Google sign-in page
    window.location.href = 'https://accounts.google.com/';
});
const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}

//user name password style
inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
