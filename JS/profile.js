
const searchBar = document.getElementById('searchBar');
const searchLogo = document.getElementById('searchLogo');
const searchCloseButton = document.getElementById('searchClose');

// Add event listeners
searchLogo.addEventListener('click', showSearchBar);
searchCloseButton.addEventListener('click', hideSearchBar);

// Functions
function showSearchBar() {
    searchBar.style.display = 'flex';
}

function hideSearchBar() {
    searchBar.style.display = 'none';
}

 // Get the close button and the submit button
 var closeButton = document.getElementById("closeAddModal");
 var submitButton = document.getElementById("addCategoryButton");

 // Get the modal
 var modal = document.getElementById("addModal");

 // When the close button is clicked, close the modal
 closeButton.onclick = function() {
     modal.style.display = "none";
 }

 // When the submit button is clicked, you can add your custom logic here
 submitButton.onclick = function() {
     // Add your logic for handling the submit button click here

     // For example, you can close the modal after submitting
     modal.style.display = "none";
 }

 // Close the modal if the user clicks outside of it
 window.onclick = function(event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
 }


  // Get the arrow logo and the modal
  var arrowLogo = document.getElementById("rename-address");
  var modal = document.getElementById("addModal");

  // Get the close button and the submit button
  var closeButton = document.getElementById("closeAddModal");
  var submitButton = document.getElementById("addCategoryButton");

  // When the arrow logo is clicked, display the modal
  arrowLogo.onclick = function() {
      modal.style.display = "block";
  }

  // When the close button is clicked, close the modal
  closeButton.onclick = function() {
      modal.style.display = "none";
  }

  // When the submit button is clicked, you can add your custom logic here
  submitButton.onclick = function() {
      // Add your logic for handling the submit button click here

      // For example, you can close the modal after submitting
      modal.style.display = "none";
  }

  // Close the modal if the user clicks outside of it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
 
