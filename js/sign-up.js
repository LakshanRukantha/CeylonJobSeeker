document.addEventListener("DOMContentLoaded", function () {
  // SIgn Up Form Validations
  const signUpForm = document.getElementById("addNewAdminForm");
  const signUpAlertMessageArea = document.getElementById(
    "signUpAlertMessageArea"
  );

  signUpForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const fullName = document.getElementById("fullName").value;
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;

    // Check if any field is empty
    if (!fullName.trim()) {
      signUpErrorMessage("Full name is required.");
      return;
    } else if (!username.trim()) {
      signUpErrorMessage("Username is required.");
      return;
    } else if (username.indexOf(" ") !== -1) {
      signUpErrorMessage("Username cannot contain spaces.");
      return;
    } else if (!password.trim()) {
      signUpErrorMessage("Password is required.");
      return;
    } else if (!confirmPassword.trim()) {
      signUpErrorMessage("Confirm Password is required.");
      return;
    } else if (password !== confirmPassword) {
      signUpErrorMessage("Password and Confirm Password doesn't match.");
      return;
    }

    signUpForm.submit();
  });

  function signUpErrorMessage(message) {
    signUpAlertMessageArea.classList.add(
      "alert",
      "alert-danger",
      "mt-4",
      "mb-0"
    );
    signUpAlertMessageArea.innerText = message;
  }
});
