const searchIcon = document.querySelector(".search-icon");
const searchContainer = document.querySelector(".search-bar-container");
const searchCloseButton = document.querySelector(".search-close");

searchIcon.addEventListener("click", () => {
    searchContainer.style.display = "flex";
});

searchCloseButton.addEventListener("click", () => {
    searchContainer.style.display = "none";
});

// Get all quantity control elements
const quantityControls = document.querySelectorAll('.quantity-control');

quantityControls.forEach(quantityControl => {
    const increaseButton = quantityControl.querySelector('.increase');
    const decreaseButton = quantityControl.querySelector('.decrease');
    const quantityDisplay = quantityControl.querySelector('.quantity');

    let quantity = 1;

    // Increase button click event
    increaseButton.addEventListener('click', () => {
        quantity++;
        quantityDisplay.textContent = quantity;
        quantityControl.classList.add('green');
    });

    // Decrease button click event
    decreaseButton.addEventListener('click', () => {
        if (quantity > 1) {
            quantity--;
            quantityDisplay.textContent = quantity;
        }
        if (quantity === 1) {
            quantityControl.classList.remove('green');
        }
    });
});


