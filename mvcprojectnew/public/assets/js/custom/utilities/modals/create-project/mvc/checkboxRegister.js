const checkboxGroup = document.getElementById('checkboxGroup2'); // Corrected ID name
const submitButton = document.getElementById('submitButton');

submitButton.addEventListener('click', function (event) {
    const checkBox = document.getElementById('confirm_message');

    if (!checkBox.checked) {
        event.preventDefault();
        alert('Please confirm the registration by checking the box.');
    }
});