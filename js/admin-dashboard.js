document.addEventListener("DOMContentLoaded", function () {
  // Select job post form and message area that display error messages
  const jobPostForm = document.getElementById("jobPostForm");
  const jobPostAlertMessageArea = document.getElementById(
    "jobPostAlertMessageArea"
  );

  jobPostForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const companyName = document.getElementById("companyName").value;
    const companyEmail = document.getElementById("companyEmail").value;
    const companyLogo = document.getElementById("companyLogo");
    const jobTitle = document.getElementById("jobTitle").value;
    const jobDescription = document.getElementById("jobDescription").value;
    const jobCategory = document.getElementById("jobCategory").value;
    const jobLocation = document.getElementById("jobLocation").value;
    const jobSalary = document.getElementById("jobSalary").value;
    const jobType = document.getElementById("jobType").value;
    const jobDeadline = document.getElementById("jobDeadline").value;

    // Check if any of the required fields are empty
    if (!companyName.trim()) {
      postJobErrorMessage("Company Name is required.");
      return;
    } else if (!companyEmail.trim()) {
      postJobErrorMessage("Company Email is required.");
      return;
    } else if (companyLogo.files.length === 0) {
      postJobErrorMessage("Company Logo is required.");
      return;
    } else if (!jobTitle.trim()) {
      postJobErrorMessage("Job Title is required.");
      return;
    } else if (!jobDescription.trim()) {
      postJobErrorMessage("Job Description is required.");
      return;
    } else if (jobCategory === "Select Job Category") {
      postJobErrorMessage("Job Category is required.");
      return;
    } else if (!jobLocation.trim()) {
      postJobErrorMessage("Job Location is required.");
      return;
    } else if (!jobSalary.trim() || isNaN(parseFloat(jobSalary))) {
      postJobErrorMessage("Valid Job Salary is required.");
      return;
    } else if (jobType === "Select Job Type") {
      postJobErrorMessage("Job Type is required.");
      return;
    } else if (!jobDeadline.trim()) {
      postJobErrorMessage("Job Deadline is required.");
      return;
    }

    // Submit the form if all the required fields are filled
    jobPostForm.submit();
  });

  function postJobErrorMessage(message) {
    jobPostAlertMessageArea.classList.add("alert", "alert-danger");
    jobPostAlertMessageArea.innerText = message;
  }

  function addAdminErrorMessage(message) {
    addAdminAlertMessageArea.classList.add("alert", "alert-danger");
    addAdminAlertMessageArea.innerText = message;
  }

  // Add New Admin Form Validations

  const addNewAdminForm = document.getElementById("addNewAdminForm");
  const addAdminAlertMessageArea = document.getElementById(
    "addAdminAlertMessageArea"
  );

  addNewAdminForm.addEventListener("submit", function (event) {
    event.preventDefault();
    const adminName = document.getElementById("adminName").value;
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if (!adminName.trim()) {
      addAdminErrorMessage("Admin name is required.");
      return;
    } else if (!username.trim()) {
      addAdminErrorMessage("Username is required.");
      return;
    } else if (!password.trim()) {
      addAdminErrorMessage("Password is required.");
      return;
    }

    addNewAdminForm.submit();
  });
});
