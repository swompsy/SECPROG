// Get references to HTML elements by their IDs
const logoutButton = document.getElementById('logoutButton');
const popup = document.getElementById('popup');
const closePopupButton = document.getElementById('closePopup');
const cancelButton = document.getElementById('cancelButton');
const confirmButton = document.getElementById('confirmButton');

// Add event listeners
logoutButton.addEventListener('click', showLogoutPopup);
closePopupButton.addEventListener('click', hideLogoutPopup);
cancelButton.addEventListener('click', cancelLogout);
confirmButton.addEventListener('click', confirmLogout);

// Functions
function showLogoutPopup() {
    popup.style.display = 'block';
}

function hideLogoutPopup() {
    popup.style.display = 'none';
}

function confirmLogout() {
    // Redirect to logoutcontroller.php
    window.location.href = '../Controllers/LogoutController.php';
}

function cancelLogout() {
    hideLogoutPopup();
}
