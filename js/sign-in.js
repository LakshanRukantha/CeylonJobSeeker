document.addEventListener("DOMContentLoaded", function () {
  // Sign In Form Validations

  const signInForm = document.getElementById("loginAsAdminForm");
  const signInAlertMessageArea = document.getElementById(
    "signInAlertMessageArea"
  );

  console.log(signInForm);

  signInForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Check if any field is empty
    if (!username.trim()) {
      signInErrorMessage("Username is required.");
      return;
    } else if (username.indexOf(" ") !== -1) {
      signInErrorMessage("Invalid username.");
      return;
    } else if (!password.trim()) {
      signInErrorMessage("Password is required.");
      return;
    }

    signInForm.submit();
  });

  function signInErrorMessage(message) {
    signInAlertMessageArea.classList.add(
      "alert",
      "alert-danger",
      "mt-4",
      "mb-0"
    );
    signInAlertMessageArea.innerText = message;
  }
});
