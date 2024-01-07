
    const checkboxGroup = document.getElementById('checkboxGroup');
    const submitButton = document.getElementById('submitButton');

    submitButton.addEventListener('click', function (event) {
        const checkboxes = checkboxGroup.querySelectorAll('input[type="checkbox"]:checked');
        if (checkboxes.length === 0) {
            event.preventDefault();
            alert('Please select at least one checkbox, either no collaborator or with collaborator(s)');
        }
    });
