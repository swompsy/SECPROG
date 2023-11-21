// JavaScript code to show and hide the modal
var modal = document.getElementById("terms-modal");
var showButton = document.getElementById("show-terms");
var closeButton = document.getElementById("close-terms");

showButton.onclick = function () {
    modal.style.display = "block";
}

closeButton.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function validateForm() {
    // Add your form validation logic here
    // Return true to submit the form or false to prevent submission
    return true;
}

// Get references to the checkboxes and the modal content
const outsideCheckbox = document.getElementById("terms");
const insideCheckbox = document.getElementById("scroll-terms");
const modalContent = document.querySelector(".modal-content");
const agreementLink = document.getElementById("show-terms");

// Function to update the checkboxes and link
function updateCheckboxes() {
    outsideCheckbox.checked = insideCheckbox.checked;
    agreementLink.disabled = insideCheckbox.checked;
}

// Add an event listener to the inside checkbox
insideCheckbox.addEventListener("change", function () {
    updateCheckboxes();

    // Hide the modal content when the checkbox is checked
    if (this.checked) {
        modal.style.display = "none";
    }
});

// Add an event listener to the outside checkbox
outsideCheckbox.addEventListener("change", function () {
    insideCheckbox.checked = this.checked;
    updateCheckboxes();
});

// document.getElementById('contact-us').addEventListener('click', function() {
//     // Redirect to about.html using JavaScript
//     window.location.href = '/HTML/about.html';
// });

const confirmButton = document.getElementById('contact-us');
contact-us.addEventListener('click', contactUsRedirect);

function contactUsRedirect() {
    // Redirect to logoutcontroller.php
    window.location.href = '/HTML/about.html';
}