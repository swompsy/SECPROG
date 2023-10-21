const searchIcon = document.querySelector(".search-icon");
const searchContainer = document.querySelector(".search-bar-container");
const searchCloseButton = document.querySelector(".search-close");

searchIcon.addEventListener("click", () => {
    searchContainer.style.display = "flex";
});

searchCloseButton.addEventListener("click", () => {
    searchContainer.style.display = "none";
});