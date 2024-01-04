const params = new URLSearchParams(window.location.search);
const errorMessage = params.get('error');

if (errorMessage) {
    alert(errorMessage); // You can customize this to show an alert box or update the UI accordingly
}