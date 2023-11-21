
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
