document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("jobPostForm");
  const alertMessageArea = document.getElementById("alertMessageArea");

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    const companyName = document.getElementById("companyName").value;
    const jobTitle = document.getElementById("jobTitle").value;
    const jobDescription = document.getElementById("jobDescription").value;
    const jobCategory = document.getElementById("jobCategory").value;
    const jobLocation = document.getElementById("jobLocation").value;
    const jobSalary = document.getElementById("jobSalary").value;
    const jobType = document.getElementById("jobType").value;
    const jobDeadline = document.getElementById("jobDeadline").value;

    // Check if any of the required fields are empty
    if (!companyName.trim()) {
      displayErrorMessage("Company Name is required.");
      return;
    } else if (!jobTitle.trim()) {
      displayErrorMessage("Job Title is required.");
      return;
    } else if (!jobDescription.trim()) {
      displayErrorMessage("Job Description is required.");
      return;
    } else if (jobCategory === "Select Job Category") {
      displayErrorMessage("Job Category is required.");
      return;
    } else if (!jobLocation.trim()) {
      displayErrorMessage("Job Location is required.");
      return;
    } else if (!jobSalary.trim() || isNaN(parseFloat(jobSalary))) {
      displayErrorMessage("Valid Job Salary is required.");
      return;
    } else if (jobType === "Select Job Type") {
      displayErrorMessage("Job Type is required.");
      return;
    } else if (!jobDeadline.trim()) {
      displayErrorMessage("Job Deadline is required.");
      return;
    }

    // Submit the form if all the required fields are filled
    form.submit();
  });

  function displayErrorMessage(message) {
    alertMessageArea.classList.add("alert", "alert-danger");
    alertMessageArea.innerText = message;
  }
});
